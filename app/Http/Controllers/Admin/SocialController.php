<?php

namespace App\Http\Controllers\Admin;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $socials = Social::all();
        return view('admin.social.index',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.social.create');
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
        $social=new Social();
        $social->name = $request->name;
        $social->link =$request->link;
        $social->icon = $request->icon;
        $social->save();
        Toastr::success('Add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/social/create');
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
        $social=Social::find($id);
        return view('admin.social.edit',compact('social'));
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
        $social=Social::find($id);
        $social->name = $request->name;
        $social->link =$request->link;
        $social->icon = $request->icon;
        $social->save();
        Toastr::success('Update successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/social/');
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

        $socail = Social::find($id);
        $socail->delete();
        Toastr::success('Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/social');
    }
}
