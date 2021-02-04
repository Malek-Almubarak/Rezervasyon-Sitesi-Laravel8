<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{asset('assets')}}/admin/assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            @if(Auth::user()->profile_photo_path)
                <img src="{{Storage::url(Auth::user()->profile_photo_path)}}" height="80" style="border-radius: 10px">
            @endif
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{route('admin_home')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Home</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_category')}}">
                    <i class="material-icons">person</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_services')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Services</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_setting')}}">
                    <i class="material-icons">library_books</i>
                    <p>Settings</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_message')}}">
                    <i class="material-icons">library_books</i>
                    <p>Contact Messages</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_review')}}">
                    <i class="material-icons">library_books</i>
                    <p>Reviews</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_faq')}}">
                    <i class="material-icons">library_books</i>
                    <p>FAQ</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_users')}}">
                    <i class="material-icons">library_books</i>
                    <p>Users</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_reservation')}}">
                    <i class="material-icons">library_books</i>
                    <p>Reservation</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('admin_logout')}}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Logout</p>
                </a>
            </li>

            <!-- <li class="nav-item active-pro ">
                  <a class="nav-link" href="./upgrade.html">
                      <i class="material-icons">unarchive</i>
                      <p>Upgrade to PRO</p>
                  </a>
              </li> -->
        </ul>
    </div>
</div>
