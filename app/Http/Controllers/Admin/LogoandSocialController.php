<?php

namespace App\Http\Controllers\Admin;

use App\LogoandSocial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Brian2694\Toastr\Facades\Toastr;

class LogoandSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $settings = LogoandSocial::all();

        return view('admin.setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //Image Validation
        $image = $request->file('logo');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/logo')){
                mkdir('uploads/logo',0777,true);
            }

            $image->move('uploads/logo',$imagename);
        }else{
            $imagename='default.png';
        }

        $logoAndSocial = new LogoandSocial();
        $logoAndSocial->facebook=$request->facebook;
        $logoAndSocial->linkedin=$request->linkedin;
        $logoAndSocial->twitter=$request->twitter;
        $logoAndSocial->instagram=$request->instagram;
        $logoAndSocial->logo = $imagename;
        $logoAndSocial->save();
        Toastr::success('Add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/setting/create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $setting = LogoandSocial::find($id);

        return view('admin.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $logoAndSocial = LogoandSocial::find($id);
        //Image Validation
        $image = $request->file('logo');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/logo')){
                mkdir('uploads/logo',0777,true);
            }

            $image->move('uploads/logo',$imagename);
        }else{
            $imagename=$logoAndSocial->logo;
        }


        $logoAndSocial->facebook=$request->facebook;
        $logoAndSocial->linkedin=$request->linkedin;
        $logoAndSocial->twitter=$request->twitter;
        $logoAndSocial->instagram=$request->instagram;
        $logoAndSocial->logo = $imagename;
        $logoAndSocial->save();
        Toastr::success('Update successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/setting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $setting =  LogoandSocial::find($id);
        if(file_exists('uploads/logo/'.$setting->logo)){
            unlink('uploads/logo/'.$setting->logo);
        }

        $setting->delete();
        Toastr::success('Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/setting');
    }
}
