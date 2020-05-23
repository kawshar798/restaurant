<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','About Us')
@section('page_title')
    Chef Details
@endsection
@section('page_main_title')
    Chef
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <table class="table ">
                    <tr>
                        <td>Name</td>
                        <td>{{$about->title}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$about->phone_number}}</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>{{$about->email}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$about->address}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$about->description}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>
                            <img src="{{url('uploads/about/'.$about->image)}}" width="100px">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection


