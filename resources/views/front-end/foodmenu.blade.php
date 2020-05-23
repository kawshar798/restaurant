<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/14/2018
 * Time: 3:58 PM
 */?>
@extends('front-end.layouts.master')
@section('title')
    FOOD MENU
@endsection
@section('banner_title')
    Our Food menu
@endsection
@section('page_title')
    menu
@endsection
@section('content')
    @include('front-end.layouts.includes.banner_area')
    <!-- Inner Page Banner Area End Here -->
    <!-- Food Menu 2 Area Start Here -->
    <div class="food-menu2-area">
        <div class="container" id="inner-isotope">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="isotop-classes-tab myisotop">
                        <a href="#" data-filter="*" class="current">All</a>

                        @foreach($categories as $category)
                            <a href="#" data-filter=".{{$category->slug}}">{{$category->name}}
                            <span class="badge">{{$category->item->count()}}</span>
                            </a>
                            @endforeach

                    </div>
                </div>
            </div>
            <div class="row featuredContainer">
                @foreach($items as $item)


                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 {{$item->category->slug}}" id="">
                    <div class="food-menu2-box">
                        <div class="food-menu2-img-holder">
                            <div class="food-menu2-more-holder">
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <a href="#"><img class="img-responsive" src="{{asset('uploads/item/'.$item->image)}}" alt="dish"></a>
                        </div>
                        <div class="food-menu2-title-holder">
                            <span>${{$item->price}}</span>
                            <h3><a href="#">{{$item->name}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    @endsection
