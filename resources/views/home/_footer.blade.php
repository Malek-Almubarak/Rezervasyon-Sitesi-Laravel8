<!-- footer-->
@php

    $setting=App\Http\Controllers\HomeController::getsetting();

@endphp
<div class="container">
    <div class="footer-block">
        <!-- footer block -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="footer-widget">
                    <h2 class="widget-title">Salon Address</h2>
                    <ul class="listnone contact">
                        <li><i class="fa fa-map-marker"></i>{{$setting->address}}</li>
                        <li><i class="fa fa-phone"></i> {{$setting->phone}}</li>
                        <li><i class="fa fa-fax"></i> {{$setting->fax}}</li>
                        <li><i class="fa fa-envelope-o"></i> {{$setting->email}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="footer-widget footer-social">
                    <!-- social block -->
                    <h2 class="widget-title">Social Feed</h2>
                    <ul class="listnone">
                        <li>
                            <a href="#"> <i class="fa fa-facebook"></i> {{$setting->facebook}} </a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> {{$setting->twitter}}</a></li>

                        <li>
                            <a href="#"> <i class="fa fa-youtube"></i>{{$setting->youtube}}</a>
                        </li>
                    </ul>
                </div>
                <!-- /.social block -->
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="footer-widget widget-newsletter">
                    <!-- newsletter block -->
                    <h2 class="widget-title">FAQ</h2>
                    <a href="{{route('faq')}}">FAQ</a>

                    <!-- /input-group -->
                </div>
                <!-- newsletter block -->
            </div>
        </div>
        <div class="tiny-footer">
            <!-- tiny footer block -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright-content">
                        <p>© Men Salon 2020 | all rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tiny footer block -->
    </div>
    <!-- /.footer block -->
</div>
