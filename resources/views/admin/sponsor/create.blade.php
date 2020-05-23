<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Sponsor')
@section('page_title')
    Add  Brand Name
@endsection
@section('page_main_title')
    Sponsor
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{route('sponsors.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">

                                    <input type="text" name="name" class="form-control" placeholder="Enter Sponsor Brand Name">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('link') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Link</label>
                                <div class="col-md-10">

                                    <input type="text" name="link" class="form-control" placeholder="Enter Sponsor Brand Name">
                                    <span class="text-danger">{{$errors->has('link')?$errors->first('link') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('image') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label">Sponsor Brand   Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control">
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
