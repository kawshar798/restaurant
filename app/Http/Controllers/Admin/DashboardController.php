<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Chef;
use App\Item;
use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $reservations = Reservation::latest()->get();

        $reservationsPen = Reservation::where('status',0)->get();
        $reservationsCon = Reservation::where('status',1)->get();
        $category = Category::all();
        $item=Item::all();
        $chef = Chef::all();

        return view('admin.dashboard',compact('reservations','reservationsPen','reservationsCon','category','item','chef'));
    }
}
