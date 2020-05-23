<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\Category;
use App\Item;
use App\RestaurantTime;
use App\Social;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //

    public function  index(){
        $aboutus = Aboutus::all();
        $times =RestaurantTime::where('publication_status',1)->get();
        $categories = Category::where('publication_status',1)->get();
        $items = Item::all();
        $socials = Social::all();

        return view('front-end.foodmenu',compact('aboutus','items','categories','times','socials'));
    }
}
