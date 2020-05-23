<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/15/2018
 * Time: 4:49 PM
 */?>

@extends('front-end.layouts.master')
@section('title')
   CONTACT US
@endsection
@section('banner_title')
    CONTACT US
@endsection
@section('page_title')
    Contact
@endsection
@section('content')
    @include('front-end.layouts.includes.banner_area')
<!-- Contact Us Page Area Start Here -->
<div class="contact-us-page-area section-space-bottom">
   <!-- <div class="google-map-area">
        <div id="googleMap" style="width:100%; height:420px;"></div>
    </div>-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-us-left">
                    <h2 class="title-bar-medium-left inner-sub-title">information</h2>
                    <ul>
                        @foreach($aboutus as $about)

                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h3>Phone</h3>
                                <p>{{$about->phone_number}}</p>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <h3>Address</h3>
                                <p>{{$about->address}}</p>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <h3>E-mail</h3>
                                <p>{{$about->email}}</p>
                            </li>                        @endforeach

                        <li>
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                            <h3>Follow Us</h3>
                            <ul class="contact-social">
                                @foreach($socials as $social)
                                    <li><a href="{{$social->link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                                @endforeach

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="contact-us-right">
                    <h2 class="title-bar-medium-left inner-sub-title">Send Us A Massege</h2>
                    <div class="contact-form">
                        <form id="contact-form" action="{{route('contact.store')}}" method="post">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="Subject*" class="form-control" name="subject" id="form-subject" data-error="Subject field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="7" cols="20" data-error="Message field is required" required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                            <button type="submit" class="ghost-on-hover-btn">Send</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                        <div class='form-response'></div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Page Area End Here -->
@endsection