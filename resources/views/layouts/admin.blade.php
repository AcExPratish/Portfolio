<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Laravel : Component 3">
    <meta name="keywords" content="Kotdanda, Valley, View, Restaurant">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel : Component 3</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ballet' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ballet' rel='stylesheet'>
    <!--Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>
<body>

@include('include.pre-loader')

@include('include.header')

@include('include.menu-section')

<div class="container mb-5">
    <div class="row">
        <div class="col-12 text-center p-5">
            <h2>Admin : Dashboard</h2>
        </div>
        <div class="col-lg-5">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link greenHover" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h3 class="greenHover">Product</h3>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{url('/admin/add/productForm')}}" class="greenHover">
                                        <strong>
                                            Add New Product
                                        </strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/show/product')}}" class="greenHover">
                                        <strong>
                                            List All Products
                                        </strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed greenHover" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h3 class="greenHover">User</h3>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{url('/admin/add/userForm')}}" class="greenHover">
                                        <strong>
                                            Add New User
                                        </strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/admin/show/user')}}" class="greenHover">
                                        <strong>
                                            List All Users
                                        </strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            @yield('content')
        </div>
    </div>
</div>

@include('include.footer')

@include('include.search-model')

@include('include.flash-message')

<!--Scripts-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
