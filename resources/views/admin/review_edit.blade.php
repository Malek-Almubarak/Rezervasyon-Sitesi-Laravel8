<html>

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets')}}/admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{asset('assets')}}/admin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Review Edit
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets')}}/admin/assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets')}}/admin/assets/demo/demo.css" rel="stylesheet" />
</head>


<body>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Service: {{$data->title}}</h5>
                    <p class="service">Review</p>
                </div>
                <div class="card-body">
                    @include('home.message')
                    <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <tr><th><b>Id</b></th><td>{{$data->id}}</td></tr>
                                        <tr><th><b>User</b></th><td>{{$data->user->name}}</td></tr>
                                        <tr><th><b>Service</b></th><td>{{$data->service->title}}</td></tr>
                                        <tr><th><b>Subject</b></th><td>{{$data->subject}}</td></tr>
                                        <tr><th><b>Review</b></th><td>{{$data->review}}</td></tr>
                                        <tr><th><b>Date</b></th><td>{{$data->created_at}}</td></tr>
                                        <tr><th><b>Status</b></th>
                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </td></tr>
                                        <tr><th><button type="submit" class="btn btn-dark">Update Review</button></th></tr>
                                        </thead>


                                    </table>
                                </div>
                            </div>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
