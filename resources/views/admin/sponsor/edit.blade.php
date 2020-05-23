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
    Add  Time and Day
@endsection
@section('page_main_title')
    Time Management
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{route('sponsors.update',$sponsor->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">

                                    <input type="text" name="name" class="form-control"  value="{{$sponsor->name}}">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

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
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Add Item</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
