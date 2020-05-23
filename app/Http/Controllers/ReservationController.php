<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\Reservation;
use App\RestaurantTime;
use App\Social;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function  index(){
        $aboutus = Aboutus::all();
        $times =RestaurantTime::where('publication_status',1)->get();
        $socials = Social::all();

        return view('front-end.reservation',compact('aboutus','times','socials'));
    }

    public function reserve(Request $request){

        $reservation = new Reservation();

        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->time_and_date = $request->time_and_date;
        $reservation->message = $request->message;
        $reservation->status = false;
        $reservation->save();
        Toastr::success('Reservation request sent successfully.We will confirm to you shorty', 'Success', ["positionClass" => "toast-top-right"]);

        return redirect('/reservation');


    }
}
