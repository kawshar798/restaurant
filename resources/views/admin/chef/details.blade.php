<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Chef')
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
                        <td>{{$chef->name}}</td>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td>{{$chef->phone_number}}</td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td>{{$chef->designation}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$chef->description}}</td>
                    </tr>
                    <tr>
                        <td>Facebook link</td>
                        <td>{{$chef->social_field_one}}</td>
                    </tr>
                    <tr>
                        <td>Linkedin link </td>
                        <td>{{$chef->social_field_two}}</td>
                    </tr>
                    <tr>
                        <td>Twitter link </td>
                        <td>{{$chef->social_field_three}}</td>
                    </tr>
                    <tr>
                        <td>Instagram link </td>
                        <td>{{$chef->social_field_four}}</td>
                    </tr>

                    <tr>
                        <td>Image</td>
                        <td>
                            <img src="{{url('uploads/chefs/'.$chef->image)}}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>
                            @if($chef->publication_status==1)
                                Published
                            @else
                                unpublished
                            @endif

                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
@endsection


