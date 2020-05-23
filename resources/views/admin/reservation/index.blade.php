<?php
/**
 * Created by PhpStorm.
 * User: Kawshar
 * Date: 7/13/2018
 * Time: 10:03 AM
 */?>
@extends('admin.layouts.master');
@section('title','Reservation')
@section('page_title')
    Manage Reservation
@endsection

@section('page_main_title')
    Reservation
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
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    <th>Message</th>
                                    <th>Time and Date</th>
                                    <th>Status Status </th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($reservations as $key=>$reservation)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->phone }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->message }}</td>
                                        <td>{{ $reservation->time_and_date }}</td>
                                        <td>
                                            @if($reservation->status==1)
                                                <label class="btn btn-success">Confirm</label>
                                            @else
                                                <label class="btn btn-danger">Pending</label>
                                            @endif

                                        </td>
                                        <td>





                                            @if($reservation->status==1)

                                                <button type="button" class="btn btn-sm btn-success" ><i class="fa fa-check"></i> </button>
                                            @else
                                                <form action="{{route('reservations.status',$reservation->id)}}" method="post" id="resrvation-{{$reservation->id}}" >
                                                    @csrf
                                                    @method('POST')
                                                </form>

                                                <button type="button" class="btn btn-sm btn-danger"  onclick="if (confirm('Are you sure verify this request by phone?????')){

                                                        event.preventDefault();
                                                        document.getElementById('resrvation-{{$reservation->id}}').submit();
                                                        } "><i class="fa fa-check"></i> </button>
                                            @endif

                                                <form action="{{route('reservations.delete',$reservation->id)}}"  method="post" id="formDelete-{{$reservation->id}}" >
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <button type="button" class="btn btn-sm btn-danger" title="Delete" onclick="if (confirm('Are you sure delete this reservation???')){

                                                        event.preventDefault();
                                                        document.getElementById('formDelete-{{$reservation->id}}').submit();
                                                        } "><i class="fa fa-trash"></i> </button>
                                                <a  href="{{route('reservations.show',$reservation->id)}}" class="btn btn-sm btn-info" title="Details"><i class="fa fa-info-circle"></i></a>














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
