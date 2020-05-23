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
    Add  Item
@endsection
@section('page_main_title')
    Item
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        @include('admin.layouts.includes.message')
                        <form class="form-horizontal" method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Item name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Slider Title">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('category_id') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Category  name</label>
                                <div class="col-md-10">
                                    <select name="category_id" class="form-control">
                                        <option>Select Any One</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach

                                    </select>
                                    <span class="text-danger">{{$errors->has('category_id')?$errors->first('category_id') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Description </label>
                                <div class="col-md-10">
                                    <textarea id="elm1" name="description"  class="summernote form-control" ></textarea>
                                    <span class="text-danger">{{$errors->has('description')?$errors->first('description') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('price') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Price</label>
                                <div class="col-md-10">
                                    <input type="text" name="price" class="form-control" placeholder="Enter Slider Title">
                                    <span class="text-danger">{{$errors->has('price')?$errors->first('price') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Slider Title">
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
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Add Item</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
