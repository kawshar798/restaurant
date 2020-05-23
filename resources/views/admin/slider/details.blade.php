<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Slider')
@section('page_title')
    Sliders Manage
@endsection
@section('page_main_title')
    Slider
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                @include('admin.layouts.includes.message')
                <table class="table ">
                    <tr>
                        <td>Title</td>
                        <td>{{$slider->title}}</td>
                    </tr>
                    <tr>
                        <td>Sub Title</td>
                        <td>{{$slider->sub_title}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>
                            <img src="{{url('uploads/sliders/'.$slider->image)}}" width="100px">
                            </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>
                            @if($slider->publication_status==1)
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


