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

            <li class="nav-item dropdown {{ Request::is('admin/page/about') ? 'active' : '' }}">
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