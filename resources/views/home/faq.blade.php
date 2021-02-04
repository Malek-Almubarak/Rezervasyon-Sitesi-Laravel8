@extends('layouts.home')

@section('title', 'FAQ'.$setting->title)
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
                        <h2 class="page-title">FAQ</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active">FAQ</li>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-holder">
                                @foreach($datalist as $rs)
                                    <h2>{{$rs->question}}</h2>
                                    {!! $rs->answer !!}
                                    <hr>
                                @endforeach
                            </div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
@endsection

