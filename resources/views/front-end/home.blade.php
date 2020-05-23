@extends('front-end.layouts.master')
@section('title')
    HOME
    @endsection
@section('content')
    <!-- Slider Area Start Here -->
    @include('front-end.layouts.includes.slider')
    <!-- Slider Area End Here -->
    <!-- Special Dish Area Start Here -->
    <div class="special-dish-area">
        <div class="container">
            <h2 class="title">Our Latest Dishes </h2>
            <span class="subtitle-color">Let’s Discover Food</span>
            <div class="row">
                <div class="rc-carousel"
                     data-loop="true"
                     data-items="4"
                     data-margin="15"
                     data-autoplay="true"
                     data-autoplay-timeout="10000"
                     data-smart-speed="2000"
                     data-dots="false"
                     data-nav="true"
                     data-nav-speed="false"
                     data-r-x-small="1"
                     data-r-x-small-nav="false"
                     data-r-x-small-dots="true"
                     data-r-x-medium="1"
                     data-r-x-medium-nav="false"
                     data-r-x-medium-dots="true"
                     data-r-small="3"
                     data-r-small-nav="true"
                     data-r-small-dots="false"
                     data-r-medium="4"
                     data-r-medium-nav="true"
                     data-r-medium-dots="false">
                    @foreach($items as $item)
                        <div class="special-dish-box">
                            <span>${{$item->price}}</span>
                            <a href="#"><img class="img-responsive" src="{{url('uploads/item/'.$item->image)}}" alt="dish"></a>
                            <h3 class="title-small title-bar-small-center"><a href="#">{{$item->name}}</a></h3>

                            <a href="#" class="ghost-semi-color-btn">Details</a>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Special Dish Area End Here -->
    <!-- Expert Chefs Area Start Here -->
    <div class="expert-chefs-area">
        <img class="img-responsive section-back" src="{{asset('/')}}front-end/assets/img/team/section-back.png" alt="Sestion Back">
        <div class="container">
            <h2 class="title-color">Our Expert Chefs</h2>
            <span class="subtitle-color">Professional Cook Team</span>
            <div class="rc-carousel"
                 data-loop="true"
                 data-items="3"
                 data-margin="30"
                 data-autoplay="true"
                 data-autoplay-timeout="10000"
                 data-smart-speed="2000"
                 data-dots="false"
                 data-nav="true"
                 data-nav-speed="false"
                 data-r-x-small="2"
                 data-r-x-small-nav="false"
                 data-r-x-small-dots="true"
                 data-r-x-medium="2"
                 data-r-x-medium-nav="false"
                 data-r-x-medium-dots="true"
                 data-r-small="2"
                 data-r-small-nav="true"
                 data-r-small-dots="false"
                 data-r-medium="3"
                 data-r-medium-nav="true"
                 data-r-medium-dots="false">
                @foreach($chefs as $chef)
                    <div class="expert-chefs-box">
                        <a href="#"><img class="img-responsive" src="{{url('uploads/chefs/'.$chef->image)}}" alt="{{$chef->name}}"></a>
                        <div class="expert-chefs-box-content">
                            <span></span>
                            <h3><a href="#">{{$chef->name}}</a></h3>
                            <p>{{$chef->designation}}</p>
                            <ul>
                                <li><a href="{{$chef->social_field_one}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{$chef->social_field_three}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{$chef->social_field_two}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="{{$chef->social_field_four}}"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Expert Chefs Area End Here -->
    <!-- Brand Area Start Here -->
    <div class="brand-area">
        <img class="img-responsive section-back" src="{{asset('/')}}front-end/assets/img/brand/back-logo.png" alt="back-logo">
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
    <!-- Brand Area End Here -->
    @endsection