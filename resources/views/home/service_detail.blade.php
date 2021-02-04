@extends('layouts.home')

@section('title', 'Service Detail'.$setting->title)
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        /* Position the image container (needed to position the left and right arrows) */
        .container {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 40%;
            width: auto;
            padding: 16px;
            margin-top: -75px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>
</head>


@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Service Detail</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li class="active">Service Detail</li>
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
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h1>{{$data->title}}</h1>


                        <!-- Full-width images with number text -->
                        @foreach($datalist as $rs)
                        <div class="mySlides">
                            <div class="numbertext">{{$rs->title}}</div>
                            <img src="{{ Storage::url($rs->image) }}" style="width:100%; height:800px;">
                        </div>
                    @endforeach

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <!-- Image text -->
                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>

                        <!-- Thumbnail images -->
                        <div class="row">
                            @foreach($datalist as $rs)
                            <div class="column">
                                <img class="demo cursor" src="{{ Storage::url($rs->image) }}" style="width:100%" onclick="currentSlide(1)" alt="">
                            </div>
                            @endforeach
                        </div>

                    <script>
                        var slideIndex = 1;
                        showSlides(slideIndex);

                        // Next/previous controls
                        function plusSlides(n) {
                            showSlides(slideIndex += n);
                        }

                        // Thumbnail image controls
                        function currentSlide(n) {
                            showSlides(slideIndex = n);
                        }

                        function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            var dots = document.getElementsByClassName("demo");
                            var captionText = document.getElementById("caption");
                            if (n > slides.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = slides.length}
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex-1].style.display = "block";
                            dots[slideIndex-1].className += " active";
                            captionText.innerHTML = dots[slideIndex-1].alt;
                        }
                    </script>

                    <p class="lead">{!! $data->detail !!}</p>
                    <div class="comments-area">
                        <ul class="comment-list">
                            @foreach($reviews as $rs)
                            <li class="comment">
                                <div class="comment-body">
                                    <div class="comment-author"><img src="{{asset('assets')}}/images/user-pic-1.jpg" alt="" class="img-circle"> </div>
                                    <div class="comment-info">
                                        <div class="comment-header">
                                            <div class="comment-meta"><span class="comment-meta-date pull-right">{{$rs->created_at}}</span></div>
                                            <h4 class="user-title">{{$rs->user->name}}</h4>
                                        </div>
                                        <div class="comment-content">
                                            <p>{{$rs->review}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="leave-comments">
                        @include('home.message')
                        <h2 class="reply-title">Leave a Review</h2>
                        <form class="reply-form" action="{{route('sendreview',['id'=>$data->id,'slug'=>$data->slug])}}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Textarea -->
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class="control-label" for="review">Reviews</label>
                                        <textarea class="form-control" id="review" name="review" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" for="subject">Subject</label>
                                        <span class="required">*</span>
                                        <input id="subject" name="subject" type="text" class="form-control" required="">
                                    </div>
                                </div>
                                <!-- Text input-->

                                <!-- Text input-->

                                <div class="col-md-12">
                                    <!-- Button -->
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">Leave A Comment</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <h4>PRICE</h4>
                        <h1>{{$data->price}}₺</h1>
                    </div>
                    <div class="widget widget-call-to-action">
                        <h1 class="widget-title">Book Reservation</h1>
                        <p class="text-white">Call to action widget for booking appointment online.</p>
                        <form action="{{route('makereservation',['id'=>$data->id])}}" method="post">
                            @csrf
                            <table>
                                <tr><h2>INFORMATION: </h2><br><br>
                                <tr> <input style="width: 300px" id="name" type="text" value="{{Auth::user()->name}}" name="name" placeholder="Name"/></tr>
                                <tr> <input style="width: 300px" id="email" type="email" value="{{Auth::user()->email}}" name="email" placeholder="Email"/></tr>
                                <tr><input style="width: 300px" id="address" type="text" value="{{Auth::user()->address}}" name="address" placeholder="Address"/></tr>
                                <tr><input style="width: 300px" id="phone" type="text" value="{{Auth::user()->phone}}" name="phone" placeholder="Phone"/></tr>
                                <tr><input style="width: 75px" id="year" type="number" name="year" placeholder="Year"/>
                                    <input style="width: 75px" id="month" type="number" name="month" placeholder="Month"/>
                                    <input style="width: 75px" id="day" type="number" name="day" placeholder="Day"/><br>
                                </tr>
                                <tr><input style="width: 75px" id="hour" type="number" name="hour" placeholder="Hour"/>
                                <input style="width: 75px" id="minute" type="number" name="minute" placeholder="Minute"/></tr><br>
                            </table>
                        <button type="submit" class="btn btn-primary btn-lg">Book Reservation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <h1 class="cta-title">Book your online appointment</h1>
                    <p class="cta-text"> Call to action button example for booking appointment for patients.</p>
                </div>
                <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
                    <a href="#" class="btn btn-white btn-lg mt20">Call to action Button</a>
                </div>
            </div>
        </div>
    </div>
@endsection

