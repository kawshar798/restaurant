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
    Add  About
@endsection
@section('page_main_title')
    About
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{route('aboutus.update',$about->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label"> Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" class="form-control" value="{{$about->title}}">
                                    <span class="text-danger">{{$errors->has('title')?$errors->first('title') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label"> Site Email</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" class="form-control" value="{{$about->email}}">
                                    <span class="text-danger">{{$errors->has('email')?$errors->first('email') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Phone Number</label>
                                <div class="col-md-10">
                                    <input type="text" name="phone_number" class="form-control" value="{{$about->phone_number}}">
                                    <span class="text-danger">{{$errors->has('phone_number')?$errors->first('phone_number') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Description </label>
                                <div class="col-md-10">
                                    <textarea  cols="5" rows="5" name="description"  class=" form-control" >{{$about->description}}</textarea>
                                    <span class="text-danger">{{$errors->has('description')?$errors->first('description') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('address') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Address</label>
                                <div class="col-md-10">
                                    <textarea  cols="5" rows="5" name="address"  class=" form-control" >{{$about->address}}</textarea>
                                    <span class="text-danger">{{$errors->has('address')?$errors->first('address') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Slider Title">
                                    <span class="text-danger">{{$errors->has('image')?$errors->first('image') : ''}}</span>

                                </div>
                            </div>


                            <div class="form-group">
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
