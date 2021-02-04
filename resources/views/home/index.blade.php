@extends('layouts.home')
@php
$setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Home '.$setting->title)


@section('content')
    <div class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cta-title">hair salon website</h1>
                    <p class="cta-text">You can see everything about for your salon and beauty shop and store. </p>
                    <a href="{{route('allservicelist')}}" class="btn btn-default" target="_blank">See Our Services</a> </div>
            </div>
        </div>

    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>salon and barbar service</h1>
                        <h5 class="small-title ">we help you look great</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                @foreach($slider as $rs)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <img src="{{ asset("storage/$rs->image") }}" height="200" alt=""> </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="{{route('service',['id' => $rs->id,'slug' => $rs->slug])}}" class="title ">{{$rs->title}}</a></h2>
                            <p>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title) }}</p>
                            <div class="price ">{{$rs->price}} ₺</div>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                @endforeach

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center"> <a href="{{route('allservicelist')}}" class="btn btn-default"> View All Service </a> </div>
            </div>
        </div>
    </div>

@endsection
