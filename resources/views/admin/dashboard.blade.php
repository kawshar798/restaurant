@extends('admin.layouts.master')

@section('title')
    Dashboard
    @endsection
@section('page_title')
    Dashboard
@endsection

@section('page_main_title')
    Dashboard
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Reservation </p>
                    <span class="text-danger">Pending</span>
                    <h2>{{$reservationsPen->count()}}</h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-account-convert widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">Reservation</p>
                    <span class="text-success">Confirm</span>
                    <h2>{{$reservationsCon->count()}}</h2>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-layers widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Category</p>
                    <h2>{{$category->count()}}</h2>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-layers widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Total Items</p>
                    <h2>{{$item->count()}}</h2>
                </div>
            </div>
        </div><!-- end col -->


        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="card-box widget-box-one">
                <i class="mdi mdi-av-timer widget-one-icon"></i>
                <div class="wigdet-one-content">
                    <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Chef</p>
                    <h2>{{$chef->count()}}</h2>

                </div>
            </div>
        </div><!-- end col -->

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Recent Reservation </h4>

                <div class="table-responsive">
                    <table class="table table table-hover m-0">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>User Name</th>
                            <th>Phone</th>
                            <th>E-mail</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $key=>$reservation)
                            <tr>

                                <td>{{$key+1}}</td>
                                <td>{{$reservation->name}}</td>
                                <td>{{$reservation->phone}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{$reservation->message}}</td>
                                <td>{{$reservation->time_and_date}}</td>
                                <td>
                                    @if($reservation->status==1)
                                        <label class="btn btn-success">Confirm</label>
                                    @else
                                        <label class="btn btn-danger">Pending</label>
                                    @endif

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div> <!-- table-responsive -->
            </div> <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


@endsection