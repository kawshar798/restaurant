<header>
    <div class="header2-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <ul>
                                @foreach($aboutus as $about)

                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">{{$about->phone_number}} </a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">{{$about->email}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                @foreach($socials as $social)
                                    <li><a href="{{$social->link}}"><i class="{{$social->icon}}" aria-hidden="true"></i></a></li>
                                @endforeach

                                <li><a href="lang/bn">Bangla</a></li>
                                <li><a href="lang/en">English</a></li>
                                <p>{{ __('Login') }}</p>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <div class="logo-area">
                            <a href="/"><img class="img-responsive" src="{{asset('/')}}front-end/assets/img/logo/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li class="{{ (\Request::route()->getName() == 'home') ? 'active' : '' }}"><a href="/">Home</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'aboutus') ? 'active' : '' }}"><a href="{{route('aboutus')}}">About</a>

                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'food-menu') ? 'active' : '' }}"><a href="{{route('food-menu')}}" >Food Menu</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'reservation.index') ? 'active' : '' }}"><a href="{{route('reservation.index')}}">Reservation</a></li>
                                    <li class="{{ (\Request::route()->getName() == 'contact.index') ? 'active' : '' }}"><a href="{{route('contact.index')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="/">Home</a>
                                </li>
                                <li><a href="#">About</a>
                                    <ul>
                                        <li><a href="about1.html">About 1</a></li>
                                        <li><a href="about2.html">About 2</a></li>
                                        <li class="has-child-menu"><a href="#">Demo</a>
                                            <ul class="thired-level">
                                                <li><a href="#">Demo 1</a></li>
                                                <li><a href="#">Demo 2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-menu')}}">Food Menu</a>
                                </li>
                                <li><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="all-chefs.html">All Chefs</a></li>
                                        <li><a href="single-chef.html">Single Chef</a></li>
                                        <li><a href="our-recipes.html">Our Recipes</a></li>
                                        <li><a href="single-recipe.html">Single Recipe</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li><a href="reservation.html">Reservation</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End -->
</header>