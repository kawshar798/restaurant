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
    Add Slider
    @endsection
@section('page_main_title')
    Slider
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        @include('admin.layouts.includes.message')
                        <form class="form-horizontal" method="post" action="{{route('sliders.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" class="form-control" placeholder="Enter Slider Title">
                                    <span class="text-danger">{{$errors->has('title')?$errors->first('title') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('sub_title') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Sub Title</label>
                                <div class="col-md-10">
                                    <input type="text" name="sub_title" class="form-control" placeholder="Enter Slider Sub Title">
                                    <span class="text-danger">{{$errors->has('sub_title')?$errors->first('sub_title') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('image') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label">Slider Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger">{{$errors->has('image')?$errors->first('image') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('publication_status') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label">Publication Status</label>
                                <div class="col-md-10">
                                    <input type="radio"  name="publication_status" value="1">Published
                                    <input type="radio"  name="publication_status" value="0">Unpublished
                                    <span class="text-danger">{{$errors->has('publication_status')?$errors->first('publication_status') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Add Slider</button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
