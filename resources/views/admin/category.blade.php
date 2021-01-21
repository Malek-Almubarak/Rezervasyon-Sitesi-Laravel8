@extends('layouts.admin')

@section('title','Category List')


@section('content')

    <div style="margin-left: 23%; margin-top: 30px">
       <section class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h3>Categories</h3>
                   </div>
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">category</li>
                       </ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="content">
           <div class="card">
               <div class="card-header">
                   <h3 class="card-title">category list</h3>
               </div>

               <h3 class="panel-title">Basic Table</h3>
           </div>
           <div class="panel-body">
               <table class="table">
                   <thead>
                   <tr>
                       <th>ID</th>
                       <th>Parent</th>
                       <th>Title</th>
                       <th>status</th>
                       <th>Edit</th>
                       <th>Delelet</th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($datalist as $rs)


                   <tr>
                       <td>{{$rs->id}}</td>
                       <td>{{$rs->parented}}</td>
                       <td>{{$rs->title}}</td>
                       <td>{{$rs->status}}</td>
                       <td>Edit</td>
                       <td>Delet</td>
                   </tr>
                   </tbody>
                   @endforeach
               </table>
           </div>
       </section>
    </div>


               <div class="card-footer">
                   footer
               </div>
   </div>
@endsection

@section('footer')
    <!-- Javascript -->

    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/scripts/klorofil-common.js') }}"></script>

    <script>
        $(function (){
            $("#example").DataTable({
                "responsive":true,"autoWidth":false,
            )};
            $('#example2').DataTable({
                "paging":true,"lengthChang":false,
                "searching":false,"ordering":true,
                "info":true,"autoWidth":false,
                "responsive":true,
            )};
        })''

    </script>

@endsection
