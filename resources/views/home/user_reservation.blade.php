@extends('layouts.home')

@section('title', 'My Reservations')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
            background-color: #4c5c6c;
            color: white;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #4D4D4D;
        }

        .vertical-menu a.active {
            background-color: #4ffa0e;
            color: white;
        }
    </style>
</head>


@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">My reservation</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">My reservation</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-holder">
@include('home.message')
                                <div class="card">
                                    <div class="card-header card-header-primary">
                                        <h4 class="card-title ">My Reservations</h4>
                                        <p class="card-category">My Reservations Table</p>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-primary">
                                                <th>Id</th>
                                                <th>Service</th>
                                                <th>Price</th>
                                                <th>Reservation Detail</th>
                                                <th>Note</th>
                                                <th>Status</th>
                                                <th>Payment</th>
                                                <th>Date</th>

                                                <th colspan="3">Actions</th>

                                                </thead>


                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <tr>
                                                        <td>
                                                            {{$rs->id}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('service',['id'=>$rs->service->id,'slug'=>$rs->service->slug])}}" target="_blank">{{$rs->service->title}}</a>
                                                        </td>
                                                        <td>
                                                            {{$rs->service->price}} ₺
                                                        </td>
                                                        <td>
                                                            {{$rs->day}}/{{$rs->month}}/{{$rs->year}} - {{$rs->hour}}:{{$rs->minute}}0
                                                        </td>
                                                        <td>
                                                            {{$rs->note}}
                                                        </td>
                                                        <td>
                                                            {{$rs->status}}
                                                        </td>
                                                        <td>
                                                            {{$rs->payment}}
                                                        </td>
                                                        <td>
                                                            {{$rs->created_at}}
                                                        </td>
                                                        <td>
                                                            <a href="{{route('user_reservation_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="vertical-menu">
                        <a href="#" class="active">{{Auth::user()->name}}</a>
                        <a href="{{route('userprofile')}}">My PROFILE</a>
                        <a href="{{route('user_review')}}">MY REVIEWS</a>
                        <a href="{{route('user_reservations')}}">MY RESERVATIONS</a>
                        @php
                            $userRoles=Auth::User()->roles->pluck('name');
                        @endphp
                        @if($userRoles->contains('admin'))
                            <li><a href="{{route('admin_home')}}" target="_blank">ADMIN PANEL</a></li>
                        @endif
                        <a href="{{route('logout')}}">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

