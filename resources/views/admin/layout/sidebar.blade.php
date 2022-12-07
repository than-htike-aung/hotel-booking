<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/page/about') ? 'active' : '' }}
                || {{ Request::is('admin/page/terms') ? 'active' : '' }}
                || {{ Request::is('admin/page/privacy') ? 'active' : '' }}
                || {{ Request::is('admin/page/contact') ? 'active' : '' }}
                || {{ Request::is('admin/page/photo-gallery') ? 'active' : '' }}
                || {{ Request::is('admin/page/video-gallery') ? 'active' : '' }}
                || {{ Request::is('admin/page/faq') ? 'active' : '' }}
                || {{ Request::is('admin/page/blog') ? 'active' : '' }}
                || {{ Request::is('admin/page/cart') ? 'active' : '' }}
                || {{ Request::is('admin/page/checkout') ? 'active' : '' }}
                || {{ Request::is('admin/page/payment') ? 'active' : '' }}
                || {{ Request::is('admin/page/signin') ? 'active' : '' }}
                || {{ Request::is('admin/page/signup') ? 'active' : '' }}
            ">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right fa-side"></i><span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.page.about') }}">
                            <i class="fa fa-angle-right fa-side"></i>About
                        </a>
                        </li>
                        <li class="{{ Request::is('admin/page/terms') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.terms') }}">
                                <i class="fa fa-angle-right fa-side"></i>Terms and Conditions
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/privacy') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.privacy') }}">
                                <i class="fa fa-angle-right fa-side"></i>Privacy Policy 
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/contact') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.contact') }}">
                                <i class="fa fa-angle-right fa-side"></i>Contact
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/photo-gallery') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.photo_gallery') }}">
                                <i class="fa fa-angle-right fa-side"></i>Photo Gallery
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/video-gallery') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.video_gallery') }}">
                                <i class="fa fa-angle-right fa-side"></i>Video Gallery
                            </a>
                        </li>
                         <li class="{{ Request::is('admin/page/faq') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.faq') }}">
                                <i class="fa fa-angle-right fa-side"></i>FAQ
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/blog') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.blog') }}">
                                <i class="fa fa-angle-right fa-side"></i>Blog
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/cart') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.cart') }}">
                                <i class="fa fa-angle-right fa-side"></i>Cart
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/checkout') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.checkout') }}">
                                <i class="fa fa-angle-right fa-side"></i>Checkout
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/payment') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.payment') }}">
                                <i class="fa fa-angle-right fa-side"></i>Payment
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/signup') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.signup') }}">
                                <i class="fa fa-angle-right fa-side"></i>SignUp
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/page/signin') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('admin_page.signin') }}">
                                <i class="fa fa-angle-right fa-side"></i>SignIn
                            </a>
                        </li>
                    </li>


                   
                </ul>
            </li>

        <li class="nav-item dropdown {{ Request::is('admin/subscriber/show') ? 'active' : ''}}
        ||  {{ Request::is('admin/subscriber/send-email') ? 'active' : ''  }}
        ">
            <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right fa-side"></i><span>Subscriber</span></a>
            <ul class="dropdown-menu">
                <li class="{{ Request::is('admin/subscriber/show') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.subscriber.show') }}">
                        <i class="fa fa-angle-right fa-side"></i>All Subscribers 
                    </a>
                </li>
                <li class="{{ Request::is('admin/subscriber/send-email') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.subscriber.send_email') }}">
                        <i class="fa fa-angle-right fa-side"></i>Send Email 
                    </a>
                </li>
                              
               
</ul>
</li>
            <li class="{{ Request::is('admin/slide/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.slide.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Slide</span></a>
            </li>

            <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.feature.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Feature</span></a>
                </li>
                    
            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.testimonial.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Testimonial</span></a>
            </li>

            <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.post.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Post</span></a>
            </li>

            <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.photo.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Photo Gallery</span></a>
            </li>

            <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.video.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Video Gallery</span></a>
            </li>

            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link" href="{{route('admin.faq.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>FAQ</span></a>
            </li>

        </ul>
    </aside>
</div>