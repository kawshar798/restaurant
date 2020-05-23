<?php

namespace App\Http\Controllers\Admin;

use App\slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Slider::all();

        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Form validation
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'image'=>'required',
            'publication_status'=>'required'
        ]);

        //Image Validation

        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/sliders')){
                mkdir('uploads/sliders',0777,true);
            }

            $image->move('uploads/sliders',$imagename);
        }else{
            $imagename='default.png';
        }

        $slider = new slider();

        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $imagename;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        $request->session()->flash('msg',"SLIDER SUCCESSFULLY ADD");
        return redirect('admin/sliders/create');


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
            $slider = Slider::find($id);
            return view('admin.slider.details',compact('slider'));


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

        $slider = Slider::find($id);

        return view('admin.slider.edit',compact('slider'));


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

        //Form validation
        $request->validate([
            'title'=>'required',
            'sub_title'=>'required',
            'publication_status'=>'required'
        ]);

        //Image Validation
        $slider=Slider::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/sliders')){
                mkdir('uploads/sliders',0777,true);
            }

            $image->move('uploads/sliders',$imagename);
        }else{
            $imagename=$slider->image;
        }




        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $imagename;
        $slider->publication_status = $request->publication_status;
        $slider->save();

        $request->session()->flash('msg',"Slider has been Updated");
        return redirect('/admin/sliders');

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
        $slider =  Slider::find($id);
        if(file_exists('uploads/sliders/'.$slider->image)){
            unlink('uploads/sliders/'.$slider->image);
        }

        $slider->delete();

        session()->flash('msg',"Slider has been delete");
        return redirect('admin/sliders');


    }

    public function unPublished($id){

        $slider = Slider::find($id);
        $slider->publication_status=0;
        $slider->save();

        session()->flash('msg',"Slider has been Unpublished");
        return redirect('/sliders');

    }

    public function published($id){
        $slider = Slider::find($id);
        $slider->publication_status=1;
        $slider->save();
        session()->flash('msg',"Slider has been Published");
        return redirect('/sliders');
    }
}
