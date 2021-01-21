@extends('layouts.admin')

@section('title','Add Service')


@section('content')

    <div style="margin-left: 23%; margin-top: 30px">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h3>Add service</h3>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Add Service</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">Add Service</h3>
               </div>
               <div class="card-body">

                   <div class="card card-primary">

                       <!-- /.card-header -->
                       <!-- form start -->
                       <form role="form" action="{{route('admin_service_store')}}" method="post">
                           @csrf
                           <div class="card-body">
                               <div class="form-group">
                                   <label>Parented</label>
                                   <select name="category_id" style="width: 100%;">

                                       @foreach($datalist as $rs)
                                       <option value="{{$rs->id}}" >{{$rs->title}}</option>
                                       @endforeach

                                   </select>
                               </div>
                               <div>
                                   <label >Title</label>
                                   <input type="text" name="title" class="form-control"  >
                               </div>

                               <div>
                                   <label >Keyword</label>
                                   <input type="text" name="keyword" value="" class="form-control">
                               </div>
                               <div >
                                   <label >Description</label>
                                   <input type="text" name="description" value=""  class="form-control">
                               </div>

                               <div >
                                   <label >Price</label>
                                   <input type="number" name="price" value="0" class="form-control">
                               </div>
                               <div>
                                   <label >Detail</label>
                                   <input type="text" name="detail" class="form-control">
                               </div>
                               <div class="form-group">
                                   <label>Status</label>
                                   <select name="status" style="width: 100%;">
                                       <option selected="selected">False</option>
                                       <option>True</option>

                                   </select>
                               </div>

                           </div>
                           <!-- /.card-body -->

                   </div>
               </div>

               <div class="card-footer">
                   <button type="submit" class="btn btn-primary">ADD service</button>
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
