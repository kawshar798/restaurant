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
    Item Details
@endsection
@section('page_main_title')
    Item
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <table class="table ">
                    <tr>
                        <td>Name</td>
                        <td>{{$contact->name}}</td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td>{{$contact->email}}</td>
                    </tr>
                    <tr>
                        <td>Subject</td>
                        <td>{{$contact->subject}}</td>
                    </tr>
                     <tr>
                        <td>Message</td>
                        <td>{{$contact->message}}</td>
                    </tr>
                    <tr>
                        <td>Date and Time</td>
                        <td>
                            {{$contact->created_at}}
                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
@endsection


