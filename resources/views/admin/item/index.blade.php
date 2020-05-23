<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Items')
@section('page_title')
    Manage item
@endsection

@section('page_main_title')
    item
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
                                    <th>Name</th>
                                    <th>item Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Publication Status </th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($items as $key=>$item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                                <img src="{{url('uploads/item/'.$item->image)}}" alt="{{$item->name}}" width="30px">
                                        </td>
                                        <td>@if('{{ $item->publication_status ==1 }}')
                                                Published
                                            @else
                                                Unpublished
                                            @endif

                                        </td>
                                        <td>
                                            <form action="{{route('items.destroy',$item->id)}}" method="post" id="formDelete-{{$item->id}}" >
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this item???')){

                                                    event.preventDefault();
                                                    document.getElementById('formDelete-{{$item->id}}').submit();
                                                    } ">delete</button>

                                            @if($item->publication_status==1)
                                                <a  href="" class="btn btn-sm btn-primary" title="Unpublished"><i class="fa fa-arrow-circle-up"></i></a>
                                            @else
                                                <a  href="" class="btn btn-sm btn-warning" title="Published"><i class="fa fa-arrow-circle-down"></i></a>

                                            @endif
                                            <a  href="{{route('items.edit',$item->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                                            <a  href="{{route('items.show',$item->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info"></i></a>
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
