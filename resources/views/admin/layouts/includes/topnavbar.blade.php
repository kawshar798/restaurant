
<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- Logo container-->
            <div class="logo">
                <!-- Text Logo -->
                <!--<a href="index.html" class="logo">-->
                <!--Zircos-->
                <!--</a>-->
                <!-- Image Logo -->
                <a href="index.html" class="logo">
                    <img src="{{asset('/')}}admin/assets/images/logo/logo.png" alt="" height="30">
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras">

                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown navbar-c-items">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"></a>
                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li class="text-center">
                                <h5>{{ Auth::user()->name }}</h5>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off m-r-5"></i> Logout
                                </a>
                            </li>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>


                        </ul>

                    </li>
                </ul>
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
            <!-- end menu-extras -->

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu {{ Request::is('admin/dashboard*'? 'active' : '')  }}">
                        <a href="{{route('admin.dashboard')}}"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
                    </li>
                    <li class="has-submenu {{Request::is('admin/slider*' ? 'active' : '')}}">
                        <a href="{{route('sliders.index')}}"><i class="mdi mdi-arrange-send-backward"></i>Slider</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('sliders.create')}}">Add Slider</a>
                            </li>
                            <li>
                                <a href="{{route('sliders.index')}}">Manage Slider</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/category*') ? 'active' : ''}}">
                        <a href="{{route('categories.index')}}"><i class="glyphicon glyphicon-th-list"></i>Category</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('categories.create')}}">Add Category</a>
                            </li>
                            <li>
                                <a href="{{route('categories.index')}}">Manage Category</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/item*') ? 'active' : ''}}">
                        <a href="{{route('items.index')}}"><i class="mdi mdi-food-fork-drink"></i>Item</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('items.create')}}">Add Item</a>
                            </li>
                            <li>
                                <a href="{{route('items.index')}}">Manage Item</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu {{Request::is('admin/reservation*') ? 'active' : ''}}">
                        <a href="{{route('reservations.index')}}"><i class="mdi mdi-shopping"></i>Reservation</a>

                    </li>
                    <li class="has-submenu {{Request::is('admin/chef*') ? 'active' : ''}}">
                        <a href="{{route('chefs.index')}}"><i class="fa fa-odnoklassniki"></i>Chef</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('chefs.create')}}">Add Chef</a>
                            </li>
                            <li>
                                <a href="{{route('chefs.index')}}">Manage Chef</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/about*') ? 'active' : ''}}">
                        <a href="{{route('aboutus.index')}}"><i class="fa fa-gg"></i>About Us</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('aboutus.create')}}">Add About us</a>
                            </li>
                            <li>
                                <a href="{{route('aboutus.index')}}">Manage About Us</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/contact*') ? 'active' : ''}}">
                        <a href="#"><i class="mdi mdi-book-multiple-variant"></i>contact</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('contact')}}">Manage Contact</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/timemanage*') ? 'active' : ''}}">
                        <a href="{{route('timemanage.index')}}"><i class="mdi mdi-alarm-check"></i>Time Management</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('timemanage.create')}}">Add Time</a>
                            </li>
                            <li>
                                <a href="{{route('timemanage.index')}}">Manage Time</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/sponsors*') ? 'active' : ''}}">
                        <a href="{{route('sponsors.index')}}"><i class="mdi mdi-gamepad"></i>Sponsor Management</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('sponsors.create')}}">Add Brand</a>
                            </li>
                            <li>
                                <a href="{{route('sponsors.index')}}">Manage Brand</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-submenu {{Request::is('admin/setting*') ? 'active' : ''}}">
                        <a href="{{route('social.index')}}"><i class="mdi mdi-google"></i>Social link</a>
                        <ul class="submenu">
                            <li>
                                <a href="{{route('social.create')}}">Add</a>
                            </li>
                            <li>
                                <a href="{{route('social.index')}}">Manage</a>
                            </li>
                        </ul>
                    </li>


                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
