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
                        <form class="form-horizontal" method="post" action="{{route('categories.update',$category->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Category name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('slug') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Category Slug</label>
                                <div class="col-md-10">
                                    <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                    <span class="text-danger">{{$errors->has('slug')?$errors->first('slug') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('publication_status') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label">Publication Status</label>
                                <div class="col-md-10">
                                    <input type="radio"  name="publication_status" value="1" {{ $category->publication_status==1 ?'checked' : '' }}>Published
                                    <input type="radio"  name="publication_status" value="0" {{ $category->publication_status==0 ?'checked' : '' }}>Unpublished
                                    <span class="text-danger">{{$errors->has('publication_status')?$errors->first('publication_status') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Update Category</button>

                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
