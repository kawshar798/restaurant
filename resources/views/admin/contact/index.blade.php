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
    Manage Contact
@endsection

@section('page_main_title')
    Contact
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
                                    <th>E-mail</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Sent Time</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($contacts as $key=>$contact)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->subject}}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->created_at->diffForHumans() }}</td>
                                        <td>
                                            <form action="{{route('contact.delete',$contact->id)}}" method="post" id="formDelete-{{$contact->id}}" >
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this contact???')){

                                                    event.preventDefault();
                                                    document.getElementById('formDelete-{{$contact->id}}').submit();
                                                    } "><i class="fa fa-trash"></i> </button>

                                            <a  href="{{route('contact.show',$contact->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info-circle"></i></a>
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
