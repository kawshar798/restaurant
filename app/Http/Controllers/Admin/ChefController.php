<?php

namespace App\Http\Controllers\Admin;

use App\Chef;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $chefs = Chef::all();
        return view('admin.chef.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Image Validation

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/chefs')){
                mkdir('uploads/chefs',0777,true);
            }

            $image->move('uploads/chefs',$imagename);
        }else{
            $imagename='default.png';
        }
         $chef = new Chef();

         $chef->name = $request->name;
         $chef->designation = $request->designation;
         $chef->description = $request->description;
         $chef->phone_number = $request->phone_number;
         $chef->social_field_one = $request->social_field_one;
         $chef->social_field_two = $request->social_field_two;
         $chef->social_field_three = $request->social_field_three;
         $chef->social_field_four = $request->social_field_four;
         $chef->publication_status = $request->publication_status;
         $chef->image = $imagename;
         $chef->save();
        Toastr::success('Chef add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/chefs/create');

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
        $chef = Chef::find($id);
        return view('admin.chef.details',compact('chef'));
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
        $chef = Chef::find($id);
        return view('admin.chef.edit',compact('chef'));
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
        //Image Validation
        $chef = Chef::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/chefs')){
                mkdir('uploads/chefs',0777,true);
            }

            $image->move('uploads/chefs',$imagename);
        }else{
            $imagename=$chef->image;
        }


        $chef->name = $request->name;
        $chef->designation = $request->designation;
        $chef->description = $request->description;
        $chef->phone_number = $request->phone_number;
        $chef->social_field_one = $request->social_field_one;
        $chef->social_field_two = $request->social_field_two;
        $chef->social_field_three = $request->social_field_three;
        $chef->social_field_four = $request->social_field_four;
        $chef->publication_status = $request->publication_status;
        $chef->image = $imagename;
        $chef->save();
        Toastr::success('Chef Update successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/chefs');
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
        $chef =  Chef::find($id);
        if(file_exists('uploads/chefs/'.$chef->image)){
            unlink('uploads/chefs/'.$chef->image);
        }

        $chef->delete();
        Toastr::success('Chef Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/chefs');

    }

    public function unPublished($id){

        $chef = Chef::find($id);
        $chef->publication_status=0;
        $chef->save();
        Toastr::success('Chef Unublished successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/chefs');


    }

    public function published($id){
        $chef = Chef::find($id);
        $chef->publication_status=1;
        $chef->save();
        Toastr::success('Chef Published successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/chefs');

    }
}
