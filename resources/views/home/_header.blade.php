<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="Hair Salon Website Templates Free Download"></a>
            </div>
            <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                <div class="navigation">
                    <div id="navigation">
                        <ul>
                            <li class="active"><a href="{{route('home')}}" title="Home">Home</a></li>

                            @php
                                $parentCategories=\App\Http\Controllers\HomeController::categoryList();
                            @endphp
                            <li class="has-sub"><a href="service-list.html" title="Service List">Services</a>
                                <ul>
                                    @foreach($parentCategories as $rs)
                                    <li><a href="service-list.html" title="Service List">{{$rs->title}}</a></li>
                                    @endforeach
                                </ul>

                            </li>
                            <li><a href="{{route('contact')}}" title="Contact Us">Contact</a> </li>
                            <li><a href="{{route('aboutus')}}" title="appointment">About Us</a> </li>
                            <li><a href="{{route('references')}}" title="appointment">References</a> </li>
                            @auth
                            <li class="has-sub"><a href="#" title="Blog ">{{Auth::user()->name}}</a>
                                <ul>
                                    <li><a href="{{route('userprofile')}}" title="Profile">My Profile</a></li>
                                    <li><a href="blog-single.html" title="Blog Single ">Logout</a></li>
                                </ul>
                            </li>
                            @else
                                <li class="has-sub"><a href="blog-default.html" title="Blog ">JOIN/LOGIN</a>
                                    <ul>
                                        <li><a href="/login" title="Blog">Login</a></li>
                                        <li><a href="/register" title="Blog Single ">Register</a></li>
                                    </ul>
                                </li>

                            @endauth


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

