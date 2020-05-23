<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Time AND Day')
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
                        <form class="form-horizontal" method="post" action="{{route('timemanage.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group {{$errors->has('dayname') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Day  name</label>
                                <div class="col-md-10">
                                    <select name="dayname" class="form-control">
                                        <option>Select Any One</option>
                                            <option value="Saturday">Saturday</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Saturday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>


                                    </select>
                                    <span class="text-danger">{{$errors->has('dayname')?$errors->first('dayname') : ''}}</span>

                                </div>
                            </div>

                            <div class="form-group {{$errors->has('opentime') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Open time</label>
                                <div class="col-md-10">

                                    <input type="text" name="opentime" class="form-control rt-time" placeholder="Enter Opening Time">
                                    <span class="text-danger">{{$errors->has('opentime')?$errors->first('opentime') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{$errors->has('closetime') ? 'has-error' : ''}}">
                                <label class="col-md-2 control-label">Close time</label>
                                <div class="col-md-10">
                                    <input type="text" name="closetime" class="form-control rt-time" placeholder="Enter closing Time">
                                    <span class="text-danger">{{$errors->has('closetime')?$errors->first('closetime') : ''}}</span>

                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('publication_status') ? 'has->error' : '' }}">
                                <label class="col-md-2 control-label"> Status</label>
                                <div class="col-md-10">
                                    <input type="radio"  name="publication_status" value="1">On
                                    <input type="radio"  name="publication_status" value="0">Off
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
