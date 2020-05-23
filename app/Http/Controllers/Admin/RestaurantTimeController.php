<?php

namespace App\Http\Controllers\Admin;
use App\RestaurantTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class RestaurantTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $times =RestaurantTime::all();
        return view('admin.timemanage.index',compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.timemanage.create');
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
       $timemanage = new RestaurantTime();

        $timemanage->dayname = $request->dayname;
        $timemanage->opentime = $request->opentime;
        $timemanage->closetime = $request->closetime;
        $timemanage->save();
        Toastr::success(' Add successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/timemanage/create');
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
        return view('admin.timemanage.edit');
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

        $timeManage = RestaurantTime::find($id);
        $timeManage->delete();

        Toastr::success('Delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/timemanage');
    }
}
