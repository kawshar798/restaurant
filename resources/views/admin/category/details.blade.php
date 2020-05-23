<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Category')
@section('page_title')
    Manage Category
@endsection

@section('page_main_title')
    Category
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
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-success">Category Edit</a>
                        <div class="table-responsive">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                              <tr>
                                  <td>Id</td>
                                  <td>{{$category->id}}</td>
                              </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                                <tr>
                                    <td>slug</td>
                                    <td>{{$category->slug}}</td>
                                </tr>
                                <tr>
                                    <td>Publication Status</td>
                                    <td> @if($category->publication_status==1)
                                             Published
                                             @else
                                             Unpublished
                                             @endif

                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>
    </div>
@endsection
