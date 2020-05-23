<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\Contact;
use App\RestaurantTime;
use App\Social;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    public function  index(){

        $aboutus = Aboutus::all();
        $times =RestaurantTime::where('publication_status',1)->get();
        $socials = Social::all();

        return view('front-end.contact',compact('aboutus','times','socials'));
    }

    public function  store(Request $request){

        $contact = new Contact();
        $contact->name     = $request->name;
        $contact->email    = $request->email;
        $contact->subject  = $request->subject;
        $contact->message  = $request->message;
        $contact->save();
        Toastr::success('Your message Successfully sent','SUCCESS',["positionClass" => "toast-top-right"]);

        return redirect('/contact');

    }
}
