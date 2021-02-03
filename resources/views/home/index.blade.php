@extends('layouts.home')
@php
$setting=\App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', 'Home '.$setting->title)


@section('content')

@endsection
