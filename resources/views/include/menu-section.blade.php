<div class="offcanvas-menu-overlay"></div>
<div class="canvas-open">
    <i class="icon_menu"></i>
</div>
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="icon_close"></i>
    </div>
    <div class="search-icon search-switch">
        <i class="icon_search"></i>
    </div>
    <div class="header-configure-area">
        <a href="#" class="bk-btn">Order Now</a>
    </div>
    <nav class="mainmenu mobile-menu">
        <ul>
            <li class="active"><a href="{{route('home')}}">Home</a></li>
            <li><a href="#">Categories</a>
                <ul class="dropdown">
                    <li><a href="./room-details.html">.sda.</a></li>
                </ul>
            </li>
            <li><a href="blog">Blog</a></li>
            <li><a href="{{route('aboutUs')}}">About Us</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            @if (Route::has('login'))
                @auth
                    <li>
                        <a href="#" class="text-dark">
                            {{__('Hi, '.ucfirst(auth()->user()->username))}}
                        </a>
                        <ul class="dropdown">
                            @if(auth()->user()->permissions == 'admin')
                                <li><a href="{{url('/dashboard')}}">{{__('Dashboard')}}</a></li>
                            @endif
                            <li><a href="{{url('/user/profile')}}">{{__('Profile')}}</a></li>
                            <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button class="btn d-flex text-danger" type="submit">{{__('Log Out')}}</button>
                            </form>
                        </ul>
                    </li>
                @else
                    <li><a href="{{route('login')}}">{{__('Login')}}</a></li>
                    <li><a href="{{route('register')}}">{{__('Register')}}</a></li>
                @endauth
            @endif
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-tripadvisor"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <ul class="top-widget">
        <li><i class="fa fa-phone"></i> (XXX) XXX-XXXXXXX</li>
        <li><i class="fa fa-envelope"></i>abc@xyz.com</li>
    </ul>
</div>
