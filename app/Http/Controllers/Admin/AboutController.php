<?php

namespace App\Http\Controllers\Admin;

use App\AboutUS;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aboutus = Aboutus::all();

        return view('admin.about.index',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.about.create');
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

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/about')){
                mkdir('uploads/about',0777,true);
            }

            $image->move('uploads/about',$imagename);
        }else{
            $imagename='default.png';
        }
        $about = new AboutUS();

        $about->title = $request->title;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->description = $request->description;
        $about->phone_number = $request->phone_number;
        $about->image = $imagename;
        $about->save();
        Toastr::success(' Add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/aboutus/create');
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
        $about = Aboutus::find($id);
        return view('admin.about.details',compact('about'));
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

        $about = Aboutus::find($id);

        return view('admin.about.edit',compact('about'));
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

        //Image Validation


       $about =  Aboutus::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/about')){
                mkdir('uploads/chefs',0777,true);
            }

            $image->move('uploads/about',$imagename);
        }else{
            $imagename=$about->image;
        }


        $about->title = $request->title;
        $about->email = $request->email;
        $about->address = $request->address;
        $about->description = $request->description;
        $about->phone_number = $request->phone_number;
        $about->image = $imagename;
        $about->save();
        Toastr::success(' Update successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/aboutus');
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
        $about =  Aboutus::find($id);
        if(file_exists('uploads/about/'.$about->image)){
            unlink('uploads/about/'.$about->image);
        }

        $about->delete();
        Toastr::success(' Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/aboutus');
    }
}
