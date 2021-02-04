@extends('layouts.home')

@section('title', 'Contact Us'.$setting->title)

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Contact Us</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">Contact Us</li>
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
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>Contact Form</h1>
                            <p> Please complete the form below. We'll do everything we can to respond to you as quickly as possible.</p>
                            @include('home.message')
                            <form action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">name</label>
                                        <input type="text" name="name" id="name" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="phone">phone</label>
                                        <input type="text" name="phone" id="phone" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="email">email</label>
                                        <input type="text" name="email" id="email" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="Subject">Subject</label>
                                        <input type="text" name="subject" id="subject" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Message</label>
                                            <textarea class="form-control" id="message" name="message" rows="6" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">send message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
{!! $setting->contact !!}
                </div>
            </div>
        </div>
    </div>
@endsection

