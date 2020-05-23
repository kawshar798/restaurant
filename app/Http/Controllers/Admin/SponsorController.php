<?php

namespace App\Http\Controllers\Admin;

use App\Sponsor;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sponsors = Sponsor::all();
        return view('admin.sponsor.index',compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.sponsor.create');
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

        $request->validate([
            'name'=>'required',
            'link'=>'required',
            'image'=>'required',
        ]);


        //Image Validation
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/brands')){
                mkdir('uploads/brands',0777,true);
            }

            $image->move('uploads/brands',$imagename);
        }else{
            $imagename='default.png';
        }



        $sponsor = new Sponsor();

        $sponsor->name = $request->name;
        $sponsor->link = $request->link;
        $sponsor->image  = $imagename;
        $sponsor->save();
        Toastr::success('Add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/sponsors/create');





       // return dd($sponsor);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sponsor = Sponsor::find($id);
        return view('admin.sponsor.edit',compact('sponsor'));
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


        $request->validate([
            'name'=>'required',
            'link'=>'required',
        ]);
        //Image Validation
        $sponsor = Sponsor::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/brands')){
                mkdir('uploads/brands',0777,true);
            }

            $image->move('uploads/brands',$imagename);
        }else{
            $imagename=$sponsor->image;
        }


        $sponsor->name = $request->name;
        $sponsor->link = $request->link;
        $sponsor->image = $imagename;
        $sponsor->save();
        Toastr::success('Update successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/sponsors');
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
        $sponsor = Sponsor::find($id);
        if(file_exists('uploads/brands/'.$sponsor->image)){
            unlink('uploads/brands/'.$sponsor->image);
        }

        $sponsor->delete();

        Toastr::success('Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/sponsors');
    }
}
