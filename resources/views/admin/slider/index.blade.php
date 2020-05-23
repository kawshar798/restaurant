<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/10/2018
 * Time: 11:07 AM
 */?>

@extends('admin.layouts.master')
@section('title','Slider')
@section('page_title')
    Sliders Manage
    @endsection
@section('page_main_title')
    Slider
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                @include('admin.layouts.includes.message')
                <table class="table ">
                    <thead>
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Sub Title</td>
                        <td>Image</td>
                        <td>Publication Status</td>
                        <td>action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $key=>$slider)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->sub_title}}</td>
                        <td>
                        <img src="{{url('uploads/sliders/'.$slider->image)}}" width="30px">
                        </td>
                        <td>
                            @if($slider->publication_status==1)
                                Published

                            @else
                                Unpublished
                            @endif

                        </td>
                        <td>

                            <form action="{{route('sliders.destroy',$slider->id)}}" method="post" id="sliderDelete-{{$slider->id}}">
                                @csrf
                                @method('DELETE')

                            </form>

                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this slider???')){

                                    event.preventDefault();
                                    document.getElementById('sliderDelete-{{$slider->id}}').submit();
                                    } "><i class="fa fa-trash"></i></button>

                            @if($slider->publication_status==1)
                                <a  href="{{route('sliders.unpublished',$slider->id)}}" class="btn btn-sm btn-primary" title="Unpublished"><i class="fa fa-arrow-circle-up"></i></a>
                                @else
                                <a  href="{{route('sliders.published',$slider->id)}}" class="btn btn-sm btn-warning" title="Published"><i class="fa fa-arrow-circle-down"></i></a>

                            @endif
                            <a  href="{{route('sliders.edit',$slider->id)}}" class="btn btn-sm btn-success" title="Edit"><i class="fa fa-edit"></i></a>
                            <a  href="{{route('sliders.show',$slider->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info"></i></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


