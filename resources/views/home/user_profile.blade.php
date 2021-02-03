@extends('layouts.home')

@section('title', 'User Profile')
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
                        <h2 class="page-title">My Profile</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">My Profile</li>
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
                                @include('profile.show')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="vertical-menu">
                        <a href="#" class="active">{{Auth::user()->name}}</a>
                        <a href="{{route('userprofile')}}">MY PROFILE</a>
                        <a href="#">YORUMLARIM</a>
                        <a href="#">NOTLARIM</a>
                        <a href="{{route('admin_home')}}" target="_blank">ADMIN PANEL</a>
                        <a href="{{route('logout')}}">LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

