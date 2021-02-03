@extends('layouts.admin')

@section('title','Add Service')
@section('javascript')
    @FilemanagerScript

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Add Service</h4>
                            <p class="card-category"> Add Service Page</p>
                        </div>
                        <div class="card-body">
                            <div style="width:800px; height: 1400px;">
                                <form action="{{route('admin_service_store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <table>

                                        <tr><h4>Category:</h4> <select name="category_id" id="category_id" style="width: 400px">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title) }}</option>
                                                @endforeach


                                            </select></tr>
                                        <tr><h4>Title:</h4> <input style="width: 400px" id="title" type="text" name="title" placeholder="Title"/></tr>
                                        <tr><h4>Keywords: </h4><input style="width: 400px" id="keywords" type="text" name="keywords" placeholder="Keywords"/></tr>
                                        <tr><h4>Description: </h4><input style="width: 400px" id="description" type="text" name="description" placeholder="Description"/></tr>
                                        <tr><h4>Detail: </h4><textarea id="detail" name="detail"></textarea>
                                            <script>
                                                window.onload = function () {
                                                    CKEDITOR.replace('detail', {
                                                        filebrowserBrowseUrl: filemanager.ckBrowseUrl,
                                                    });
                                                }

                                            </script>
                                        <tr><h4>Slug: </h4><input style="width: 400px" id="slug" type="text" name="slug" placeholder="Slug"/></tr>
                                        <tr><h4>Price: </h4><input style="width: 400px" id="price" type="number" name="price" placeholder="Price"/></tr>
                                        <tr><h4>Image:</h4></label><input type="file" name="image" id="image" class="form-control"></tr>
                                        <tr><label for="status"><h4><br>Status:</h4></label>

                                            <select name="status" id="status" style="width: 400px">
                                                <option value="true">True</option>
                                                <option value="false">False</option>

                                            </select></tr><br><br>
                                        <tr><button type="submit" style="color:#000000; background-color: #5dff00; width: 150px;">Add Service</button></tr>
                                    </table>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

@endsection
