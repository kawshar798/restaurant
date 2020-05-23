<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/15/2018
 * Time: 10:33 AM
 */?>

@extends('front-end.layouts.master')
@section('title')
    RESERVATION
@endsection
@section('banner_title')
    RESERVATION FORM
@endsection
@section('page_title')
    RESERVATION
@endsection
@section('content')
    @include('front-end.layouts.includes.banner_area')
<!-- reservation-page-area Start Here -->
<div class="reservation-page-area">
    <div class="container">
        <div class="reservation-page-inner">
            <div class="reservation-page-left">
                <div class="reservation-page-form">
                    <span>Take A</span>
                    <h2>RESERVATION</h2>
                    <form id="reservation-form" action="{{route('reservation.reserve')}}" method="post">
                        @csrf
                        <div class="reservation-page-input-box">
                            <input type="text" class="form-control" placeholder="Name" name="name" id="form-name" data-error="Subject field is required" required />
                        </div>
                        <div class="reservation-page-input-box">
                            <input type="text" class="form-control" placeholder="E-mail" name="email" id="form-subject" data-error="Subject field is required" required/>
                        </div>
                        <div class="reservation-page-input-box">
                            <input type="text" class="form-control" placeholder="Phone" name="phone" id="form-phone" data-error="Subject field is required" required/>
                        </div>
                        <div class="reservation-page-input-box">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <input type="text" class="form-control rt-date" placeholder="Date" name="time_and_date" id="form-date" data-error="Subject field is required" required/>
                        </div>
                        <div class="reservation-page-input-box">
                            <textarea class="form-control" placeholder="Message" name="message" id="form-message" data-error="Message field is required" required></textarea>
                        </div>
                        <button type="submit" class="book-now-btn">Book A Table</button>
                        <div class='form-response'></div>
                    </form>
                </div>
            </div>
            <div class="reservation-page-right">
                <img src="{{asset('/')}}front-end/assets/img/reservation-banner.png" class="img-responsive" alt="reservation-banner">
            </div>
        </div>
    </div>
</div>
    @endsection
