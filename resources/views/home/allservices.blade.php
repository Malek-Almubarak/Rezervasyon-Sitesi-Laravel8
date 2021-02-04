@extends('layouts.home')

@section('title', 'All Services ')


@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">All Services</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">All Services</li>
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
                @foreach($datalist as $rs)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="post-block">
                            <div class="row ">
                                <!-- post block -->
                                <div class="col-md-6">
                                    <div class="post-img">
                                        <a href="{{route('service',['id' => $rs->id,'slug' => $rs->slug])}}"><img src="{{ Storage::url($rs->image) }}" style="height: 200px; width: 200px;" alt="" class="img-responsive"></a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-content">
                                        <h2><a href="{{route('service',['id' => $rs->id,'slug' => $rs->slug])}}" class="title" target="_blank">{{$rs->title}}</a></h2>
                                        <h1>{{$rs->price}} ₺</h1>
                                        <a href="{{route('service',['id' => $rs->id,'slug' => $rs->slug])}}" class="btn btn-default">See More</a> </div>
                                </div>
                            </div>
                            <!-- /.post block -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

