@extends('layouts.admin')

@section('title','Edit Category')


@section('content')
        <div style="margin-left: 23%; margin-top: 30px">
           <section class="content-header">
               <div class="container-fluid">
                   <div class="row mb-2">
                       <div class="col-sm-6">
                           <h3>edit category</h3>
                       </div>
                       <div class="col-sm-6">
                           <ol class="breadcrumb float-sm-right">
                               <li class="breadcrumb-item"><a href="#">Home</a></li>
                               <li class="breadcrumb-item active">Edit categoy</li>
                           </ol>
                       </div>
                   </div>
               </div>
           </section>
           <section class="content">
               <div class="card">
                   <div class="card-header">
                       <h3 class="card-title">Add categoy</h3>
                   </div>
                   <div class="card-body">

                       <div class="card card-primary">

                           <!-- /.card-header -->
                           <!-- form start -->
                           <form role="form" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                               @csrf
                               <div class="card-body" STYLE="width: 600Px">
                                   <div class="form-group">
                                       <label>Parented</label>
                                       <select name="parented" style="width: 100%;">
                                           @foreach($datalist as $rs)
                              <option value="{{$rs->id}}" @if ($rs->id==$data->parented) selected="selected" @endif>{{$rs->title}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                                   <div STYLE="width: 600Px">
                                       <label >Title</label>
                                       <input type="text" name="title"  value="{{$data->title}}" class="form-control" >
                                   </div>


                                   <div STYLE="width: 600Px">
                                       <label >Keyword</label>
                                       <input type="text" name="keyword" value="{{$data->keyword}}" class="form-control">
                                   </div>
                                   <div STYLE="width: 600Px" >
                                       <label >Description</label>
                                       <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                   </div>
                                   <div class="form-group">
                                       <label>Status</label>
                                       <select name="status"  style="width: 100%;">
                                           <option selected="selected">{{$data->status}}</option>
                                           <option >False</option>
                                           <option>True</option>

                                       </select>
                                   </div>

                               </div>
                               <!-- /.card-body -->

                       </div>
                   </div>

                   <div class="card-footer">
                       <button type="submit" class="btn btn-primary">Update CATEGORY</button>
                   </div>

               </div>
           </section>
       </div>

    @endsection
    <script>
        import Button from "@/Jetstream/Button";
        export default {
            components: {Button}
        }
    </script>
