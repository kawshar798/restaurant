<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Social')
@section('page_title')
  All  Social
@endsection

@section('page_main_title')
    Social
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
                                    <th>Link</th>
                                    <th>Icon</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($socials as $key=>$social)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $social->name }}</td>
                                        <td>{{ $social->link }}</td>
                                        <td>{{ $social->icon }}  || <i class="{{$social->icon}}"></i> </td>
                                        <td>
                                            <form action="{{route('social.destroy',$social->id)}}" method="post" id="sliderDelete-{{$social->id}}">
                                                @csrf
                                                @method('DELETE')

                                            </form>

                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this Item???')){

                                                    event.preventDefault();
                                                    document.getElementById('sliderDelete-{{$social->id}}').submit();
                                                    } "><i class="fa fa-trash"></i></button>
                                                <a  href="{{route('social.edit',$social->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>









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
