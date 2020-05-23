<?php

namespace App\Http\Controllers\Admin;
use App\Notifications\ReservationConfirm;
use Brian2694\Toastr\Facades\Toastr;

use App\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class ReservationController extends Controller
{
    //
    public function index()
    {
        //
        $reservations = Reservation::all();

        return view('admin.reservation.index',compact('reservations'));
    }

    public function  status($id){
        $reservation = Reservation::find($id);
        $reservation->status=1;
        $reservation->save();


        Notification::route('mail', $reservation->email)
            ->notify(new ReservationConfirm());

        Toastr::success('Reservation confirm successfully.', 'Success', ["positionClass" => "toast-top-right"]);



        return redirect('admin/reservations');

    }

    public function  show($id){

        $reservation = Reservation::find($id);
        return view('admin.reservation.details',compact('reservation'));

    }
    public function  delete($id){
        $reservation = Reservation::find($id);

        $reservation->delete();

        Toastr::success('Reservation delete successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect('admin/reservations');

    }

}
