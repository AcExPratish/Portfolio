<header class="header-section">
    <div class="top-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="tn-left">
                        <li><i class="fa fa-phone"></i>(XXX) XXX-XXXXXXX</li>
                        <li><i class="fa fa-envelope"></i>abc@xyz.com</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="tn-right">
                        <div class="top-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <a href="#newsletter" class="bk-btn">Newsletter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <h1 class="logo-font">{{__('Laravel')}}</h1>
                        </a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="nav-menu">
                        <nav class="mainmenu">
                            <ul>
                                <li class="active"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                                <li><a href="/categories">{{__('Categories')}}</a>
                                    <ul class="dropdown">
                                        <li><a href="{{url('categories/game')}}">{{__('Game')}}</a></li>
                                        <li><a href="{{url('categories/cd')}}">{{__('CD')}}</a></li>
                                        <li><a href="{{url('categories/music')}}">{{__('Music')}}</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('blog')}}">{{__('Product')}}</a></li>
                                <li><a href="{{route('aboutUs')}}">{{__('About Us')}}</a></li>
                                <li><a href="{{route('contact')}}">{{__('Contact')}}</a></li>
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
                        <div class="nav-right search-switch">
                            <i class="icon_search"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
