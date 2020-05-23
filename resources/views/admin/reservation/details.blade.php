<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Reservation')
@section('page_title')
    Reservation Details
@endsection
@section('page_main_title')
    Reservation
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <table class="table ">
                    <tr>
                        <td>Name</td>
                        <td>{{$reservation->name}}</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>{{$reservation->email}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$reservation->phone}}</td>
                    </tr> <tr>
                        <td>Message</td>
                        <td>{{$reservation->message}}</td>
                    </tr>
                    <tr>
                        <td>Date and Time</td>
                        <td>
                            {{$reservation->time_and_date}}
                        </td>
                    </tr>
                    <tr>
                        <td> Status</td>
                        <td>
                            @if($reservation->status==1)
                                <label class="btn btn-success">Confirm</label>
                            @else
                                <label class="btn btn-danger">Pending</label>
                            @endif

                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
@endsection


