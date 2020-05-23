<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Sponsor')
@section('page_title')
  All Sponsor band
@endsection

@section('page_main_title')
    Sponsor
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
                                    <th>Brand Name</th>
                                    <th>image</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($sponsors as $key=>$sponsor)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $sponsor->name }}</td>
                                        <td>
                                            <img src="{{url('uploads/Brands/'.$sponsor->image)}}" width="100px">
                                        </td>
                                        <td>
                                            <form action="{{route('sponsors.destroy',$sponsor->id)}}" method="post" id="sliderDelete-{{$sponsor->id}}">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this slider???')){

                                                    event.preventDefault();
                                                    document.getElementById('sliderDelete-{{$sponsor->id}}').submit();
                                                    } "><i class="fa fa-trash"></i></button>
                                        <a  href="{{route('sponsors.edit',$sponsor->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
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
