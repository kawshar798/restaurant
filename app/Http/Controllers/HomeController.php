<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\Http\Controllers\Admin\LogoandSocialController;
use App\LogoandSocial;
use App\RestaurantTime;
use App\Slider;
use App\Category;
use App\Chef;
use App\Item;
use App\Social;
use App\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $sliders = Slider::all();
        $categories = Category::where('publication_status',1)->get();
         $items = Item::where('publication_status',1)
                        ->orderBy('id','DESC')
                        ->take(8)
                        ->get();

         $chefs=Chef::where('publication_status',1)->get();

         $times =RestaurantTime::where('publication_status',1)->get();

         $sponsors = Sponsor::all();
            $aboutus = Aboutus::all();
        $socials = Social::all();
        return view('front-end.home',compact('items','categories','chefs','sliders','times','sponsors','socials','aboutus'));
    }




}
