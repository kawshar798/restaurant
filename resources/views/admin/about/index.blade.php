<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','About Us')
@section('page_title')
    Manage About us
@endsection

@section('page_main_title')
   About Us
@endsection


@section('content')
    <!-- Example DataTables Card-->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('aboutus.create')}}" class="btn btn-success">Add About Us</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Phone Number</th>
                                    <th>E-mail</th>
                                    <th>Address</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($aboutus as $key=>$about)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{{ $about->phone_number }}</td>
                                        <td>{{ $about->email }}</td>
                                        <td>{{ $about->address }}</td>
                                        <td>{{ $about->description }}</td>
                                        <td>
                                            <img src="{{url('uploads/about/'.$about->image)}}" width="30px">
                                        </td>
                                        <td>
                                            <form action="{{route('aboutus.destroy',$about->id)}}" method="post" id="sliderDelete-{{$about->id}}">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this slider???')){

                                                    event.preventDefault();
                                                    document.getElementById('sliderDelete-{{$about->id}}').submit();
                                                    } "><i class="fa fa-trash"></i></button>

                                            <a  href="{{route('aboutus.edit',$about->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a  href="{{route('aboutus.show',$about->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info"></i></a>









                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
    </div>
@endsection
