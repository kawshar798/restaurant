<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Category')
@section('page_title')
    Add  Category
@endsection
@section('page_main_title')
    Category
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        @include('admin.layouts.includes.message')
                        <form class="form-horizontal" method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Category name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Slider Title">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

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
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Add Category</button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
