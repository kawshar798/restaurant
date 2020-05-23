<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Time AND Day')
@section('page_title')
    Add  Time and Day
@endsection

@section('page_main_title')
    Time Management
@endsection


@section('content')
    <!-- Example DataTables Card-->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                @include('admin.layouts.includes.message')
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Day Name</th>
                                    <th>Open Time</th>
                                    <th>close Time</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($times as $key=>$time)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $time->dayname }}</td>
                                        <td>{{ $time->opentime }}</td>
                                        <td>{{ $time->closetime }}</td>
                                        <td>

                                            @if($time->publication_status==1)
                                                <label class="btn btn-success btn-sm">ON</label>
                                                @else
                                                <label class="btn btn-danger btn-sm">OF</label>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{route('timemanage.destroy',$time->id)}}" method="post" id="formDelete-{{$time->id}}" >
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this item???')){

                                                    event.preventDefault();
                                                    document.getElementById('formDelete-{{$time->id}}').submit();
                                                    } ">delete</button>
                                            <a  href="{{route('timemanage.edit',$time->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a  href="{{route('timemanage.show',$time->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
