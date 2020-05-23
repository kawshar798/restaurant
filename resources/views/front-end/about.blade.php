<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/15/2018
 * Time: 4:49 PM
 */?>

@extends('front-end.layouts.master')
@section('title')
   About US
@endsection
@section('banner_title')
    About US
@endsection
@section('page_title')
    About
@endsection
@section('content')
    @include('front-end.layouts.includes.banner_area')
    <!-- Contact Us Page Area Start Here -->
    @foreach($aboutus as $about)
        <div class="about-page2-area section-space">
            <div class="container">
                <div class="row no-gutters about-page2-inner">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page2-content">
                            <h2>{{$about->title}}</h2>
                            <p>{{$about->description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page2-img-holder">
                            <img src="{{url('uploads/about/'.$about->image)}}" class="img-responsive" alt="about-banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <img class="img-responsive section-back" src="img/brand/back-logo.png" alt="back-logo">
        <div class="container">
            <div class="rc-carousel"
                 data-loop="true"
                 data-items="6"
                 data-margin="15"
                 data-autoplay="true"
                 data-autoplay-timeout="10000"
                 data-smart-speed="2000"
                 data-dots="false"
                 data-nav="true"
                 data-nav-speed="false"
                 data-r-x-small="2"
                 data-r-x-small-nav="false"
                 data-r-x-small-dots="true"
                 data-r-x-medium="3"
                 data-r-x-medium-nav="false"
                 data-r-x-medium-dots="true"
                 data-r-small="4"
                 data-r-small-nav="true"
                 data-r-small-dots="false"
                 data-r-medium="6"
                 data-r-medium-nav="true"
                 data-r-medium-dots="false">
                @foreach($sponsors as $sponsor)
                    <div class="brand-area-box">
                        <a href="{{$sponsor->link}}"><img src="{{url('uploads/brands/'.$sponsor->image)}}" alt="brand"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Contact Us Page Area End Here -->
@endsection