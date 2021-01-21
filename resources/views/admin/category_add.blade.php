@extends('layouts.admin')

@section('title','admin Panel Home Page')


@section('content')

    <div style="margin-left: 23%; margin-top: 30px">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h3>Add category</h3>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Add categoy</li>
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
                       <form role="form" action="{{route('admin_category_create')}}" method="post">
                           @csrf
                           <div class="card-body">
                               <div class="form-group">
                                   <label>Parented</label>
                                   <select name="parented" style="width: 100%;">
                                       <option value="0" selected="selected">Main category</option>
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
                                   <input type="text" name="keyword" class="form-control">
                               </div>
                               <div >
                                   <label >Description</label>
                                   <input type="text" name="description" class="form-control">
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
                   <button type="submit" class="btn btn-primary">ADD CATEGORY</button>
               </div>
               </form>
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
