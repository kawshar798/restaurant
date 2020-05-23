<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Social')
@section('page_title')
    Add  Social link
@endsection
@section('page_main_title')
    Social
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{route('social.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Social Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Social  Name(Ex:facebook)">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('link') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Social Link</label>
                                <div class="col-md-10">
                                    <input type="text" name="link" class="form-control" placeholder="Enter Social  Link(Ex:https://facebook.com)">
                                    <span class="text-danger">{{$errors->has('link')?$errors->first('link') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('icon') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Icon</label>
                                <div class="col-md-10">
                                    <input type="text" name="icon" class="form-control" placeholder="Enter  font-awesome icon  Link(Ex:fa fa-facebook)" >
                                    <span class="text-danger">{{$errors->has('icon')?$errors->first('icon') : ''}}</span>

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
