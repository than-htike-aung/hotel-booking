<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right fa-side"></i><span>Dropdown
                        Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fa fa-angle-right fa-side"></i> Item
                            1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right fa-side"></i> Item 2</a>
                    </li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="{{route('admin.slide.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Slide</span></a>
            </li>

            <li class=""><a class="nav-link" href="{{route('admin.feature.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                    <span>Feature</span></a>
                </li>
                    
            <li class=""><a class="nav-link" href="{{route('admin.testimonial.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Testimonial</span></a>
            </li>

            <li class=""><a class="nav-link" href="{{route('admin.post.view')}}"><i class="fa fa-hand-o-right fa-side"></i>
                <span>Post</span></a>
            </li>

           

        </ul>
    </aside>
</div>