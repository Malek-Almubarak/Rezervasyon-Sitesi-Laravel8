@extends('layouts.admin')

@section('title','Reservations')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Reservations</h4>
                            <p class="card-category"> Reservations Table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>Id</th>
                                    <th>User</th>
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
                                                <a href="{{route('admin_reservation_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><img src="{{asset('assets/admin/images')}}/edit.png" height="30"></a>
                                            </td>
                                            <td>
                                                <a href="{{route('admin_reservation_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{asset('assets/admin/images')}}/delete.png" height="30"></a>
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
