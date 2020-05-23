<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Items')
@section('page_title')
   Item Details
@endsection
@section('page_main_title')
    Item
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                @include('admin.layouts.includes.message')
                <table class="table ">
                    <tr>
                        <td>Name</td>
                        <td>{{$item->name}}</td>
                    </tr>
                    <tr>
                        <td>Item  name</td>
                        <td>{{$item->category->name}}</td>
                    </tr>
                    <tr>
                        <td>Item name</td>
                        <td>{{$item->description}}</td>
                    </tr> <tr>
                        <td>Item name</td>
                        <td>{{$item->price}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td>
                            <img src="{{url('uploads/item/'.$item->image)}}" width="100px">
                        </td>
                    </tr>
                    <tr>
                        <td>Publication Status</td>
                        <td>
                            @if($item->publication_status==1)
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


