<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Chef')
@section('page_title')
   Edit  Chef
@endsection
@section('page_main_title')
    Chef
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-10">
                        <form class="form-horizontal" method="post" action="{{route('chefs.update',$chef->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Chef name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" value="{{$chef->name}}">
                                    <span class="text-danger">{{$errors->has('name')?$errors->first('name') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('designation') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Designation</label>
                                <div class="col-md-10">
                                    <input type="text" name="designation" class="form-control" value="{{$chef->designation}}">
                                    <span class="text-danger">{{$errors->has('designation')?$errors->first('designation') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('phone_number') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Designation</label>
                                <div class="col-md-10">
                                    <input type="text" name="phone_number" class="form-control" value="{{$chef->phone_number}}">
                                    <span class="text-danger">{{$errors->has('phone_number')?$errors->first('phone_number') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('social_field_one') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">facebook Profile</label>
                                <div class="col-md-10">
                                    <input type="text" name="social_field_one" class="form-control" value="{{$chef->social_field_one}}">
                                    <span class="text-danger">{{$errors->has('social_field_one')?$errors->first('social_field_one') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('social_field_two') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Linkedin Profile</label>
                                <div class="col-md-10">
                                    <input type="text" name="social_field_two" class="form-control" value="{{$chef->social_field_two}}">
                                    <span class="text-danger">{{$errors->has('social_field_two')?$errors->first('social_field_two') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('social_field_three') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Twitter Profile</label>
                                <div class="col-md-10">
                                    <input type="text" name="social_field_three" class="form-control" value="{{$chef->social_field_three}}">
                                    <span class="text-danger">{{$errors->has('social_field_three')?$errors->first('social_field_three') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('social_field_four') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Instagram Profile</label>
                                <div class="col-md-10">
                                    <input type="text" name="social_field_four" class="form-control" value="{{$chef->social_field_four}}">
                                    <span class="text-danger">{{$errors->has('social_field_four')?$errors->first('social_field_four') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Description </label>
                                <div class="col-md-10">
                                    <textarea id="elm1" name="description"  class="summernote form-control" >{{$chef->description}}</textarea>
                                    <span class="text-danger">{{$errors->has('description')?$errors->first('description') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Image</label>
                                <div class="col-md-10">
                                    <input type="file" name="image" class="form-control">
                                    <span class="text-danger">{{$errors->has('image')?$errors->first('image') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('publication_status') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label">Publication Status</label>
                                <div class="col-md-10">
                                    <input type="radio"  name="publication_status" value="1" {{$chef->publication_status==1 ? 'checked' : ''}}>Published
                                    <input type="radio"  name="publication_status" value="0" {{$chef->publication_status==0 ? 'checked' : ''}}>Unpublished
                                    <span class="text-danger">{{$errors->has('publication_status')?$errors->first('publication_status') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-lg col-md-offset-2" type="submit">Update Chef</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
