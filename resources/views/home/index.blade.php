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
                    <h1 class="cta-title">hair salon website templates</h1>
                    <p class="cta-text">You can download and use these FREE HTML templates for your salon and beauty shop and store. </p>
                    <a href="https://easetemplate.com/downloads/category/free-website-template/" class="btn btn-default" target="_blank">Call to action buttons</a> </div>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <img src="{{asset('assets')}}/images/service-icon-1.png" alt=""> </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="# " class="title ">traditional cut</a></h2>
                            <p>Responsive website templates free download html5 with css3 for Hair Salon and Shop website template.</p>
                            <div class="price ">$45</div>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <img src="{{asset('assets')}}/images/service-icon-2.png" alt=""> </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="#" class="title ">MUSTACHE TRIM</a></h2>
                            <p>Free Responsive HTML5 CSS3 Website Template for hair salon and beauty salon.</p>
                            <div class="price">$45</div>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <img src="{{asset('assets')}}/images/service-icon-3.png" alt=""> </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="#" class="title ">BEARD TRIM</a></h2>
                            <p>Responsive website templates free download html with css.</p>
                            <div class="price ">$45</div>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center"> <a href="#" class="btn btn-default"> View All Service </a> </div>
            </div>
        </div>
    </div>

@endsection
