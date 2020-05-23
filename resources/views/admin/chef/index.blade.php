<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Chef')
@section('page_title')
    Manage Chefs
@endsection

@section('page_main_title')
   Chef
@endsection


@section('content')
    <!-- Example DataTables Card-->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>designation</th>
                                    <th>Image</th>
                                    <th>Publication Status </th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($chefs as $key=>$chef)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $chef->name }}</td>
                                        <td>{{ $chef->phone_number }}</td>
                                        <td>{{ $chef->designation }}</td>
                                        <td>
                                            <img src="{{url('uploads/chefs/'.$chef->image)}}" width="30px">
                                        </td>
                                        <td>
                                            @if($chef->publication_status==1)
                                               Published
                                            @else
                                                Unublished
                                            @endif

                                        </td>
                                        <td>
                                            <form action="{{route('chefs.destroy',$chef->id)}}" method="post" id="sliderDelete-{{$chef->id}}">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this slider???')){

                                                    event.preventDefault();
                                                    document.getElementById('sliderDelete-{{$chef->id}}').submit();
                                                    } "><i class="fa fa-trash"></i></button>

                                            @if($chef->publication_status==1)
                                                <a  href="{{route('chefs.unpublished',$chef->id)}}" class="btn btn-sm btn-primary" title="Unpublished"><i class="fa fa-arrow-circle-up"></i></a>
                                            @else
                                                <a  href="{{route('chefs.published',$chef->id)}}" class="btn btn-sm btn-warning" title="Published"><i class="fa fa-arrow-circle-down"></i></a>

                                            @endif
                                                <a  href="{{route('chefs.edit',$chef->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                                <a  href="{{route('chefs.show',$chef->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info"></i></a>









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
