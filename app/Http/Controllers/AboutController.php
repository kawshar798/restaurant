<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\RestaurantTime;
use App\Social;
use App\Sponsor;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //

    public function  index(){
        $times =RestaurantTime::where('publication_status',1)->get();
        $aboutus = Aboutus::all();
        $sponsors = Sponsor::all();
        $socials = Social::all();
        return view('front-end.about',compact('aboutus','times','sponsors','socials'));






    }
}
