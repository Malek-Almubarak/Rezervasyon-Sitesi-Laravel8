@extends('layouts.admin')

@section('title','Reviews')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Reviews</h4>
                            <p class="card-category"> Reviews Table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>User</th>
                                    <th>Service</th>
                                    <th>Subject</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                    <th>Date</th>

                                    <th colspan="3">Actions</th>

                                    </thead>


                                    <tbody>
                                    @include('home.message')
                                    @foreach($datalist as $rs)
                                        <tr>
                                            <td>
                                                {{$rs->id}}
                                            </td>
                                            <td>
                                                {{$rs->user->name}}
                                            </td>
                                            <td>
                                                <a href="{{route('service',['id'=>$rs->service->id,'slug'=>$rs->service->slug])}}" target="_blank">{{$rs->service->title}}</a>
                                            </td>
                                            <td>
                                                {{$rs->subject}}
                                            </td>
                                            <td>
                                                {{$rs->review}}
                                            </td>
                                            <td>
                                                {{$rs->status}}
                                            </td>
                                            <td>
                                                {{$rs->created_at}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
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
@endsection
