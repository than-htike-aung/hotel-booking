  
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side">
                        <ul>
                            <li class="phone-text">111-222-3333</li>
                            <li class="email-text">contact@arefindev.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6 right-side">
                        <ul class="right">
                            @if ($global_page_data->cart_status == 1)

                                <li class="menu"><a href="cart.html">Cart</a></li>
                            @endif
                            @if ($global_page_data->checkout_status == 1)

                                <li class="menu"><a href="checkout.html">Checkout</a></li>
                            @endif
                            @if ($global_page_data->signup_status == 1)
                            <li class="menu"><a href="signup.html">{{ $global_page_data->signup_heading }}</a></li>
                            @endif
                            @if ($global_page_data->signin_status == 1)
                            <li class="menu"><a href="login.html">{{ $global_page_data->signin_heading }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="navbar-area" id="stickymenu">

            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="{{asset('frontend/uploads/logo.png')}}" alt="">
                </a>
            </div>
        
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{asset('frontend/uploads/logo.png')}}" alt="">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">        
                                <li class="nav-item">
                                    <a href="{{route('home')}}" class="nav-link">Home</a>
                                </li>
                                @if ($global_page_data->about_status == 1)
                                    <li class="nav-item">
                                        <a href="{{route('about')}}" class="nav-link">{{ $global_page_data->about_heading }}</a>
                                    </li>
                                @endif
                                
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Room & Suite</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Couple Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Regular Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Delux Double Bed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="room-detail.html" class="nav-link">Premium Suite</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void;" class="nav-link dropdown-toggle">Gallery</a>
                                    <ul class="dropdown-menu">
                                        @if ($global_page_data->photo_gallery_status == 1)
                                        <li class="nav-item">
                                            <a href="{{ route('photo.gallery') }}" class="nav-link">Photo Gallery</a>
                                        </li>
                                        @endif
                                        @if ($global_page_data->video_gallery_status == 1)
                                        <li class="nav-item">
                                            <a href="{{ route('video.gallery') }}" class="nav-link">Video Gallery</a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                @if ($global_page_data->blog_status == 1)
                                <li class="nav-item">
                                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                                </li>
                                @endif
                                @if ($global_page_data->contact_status == 1)
                                <li class="nav-item">
                                    <a href="{{ route('contact') }}" class="nav-link">{{$global_page_data->contact_heading  }}</a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
