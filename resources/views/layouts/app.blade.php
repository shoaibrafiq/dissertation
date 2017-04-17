<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Al-Mu min Charity Trust')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-color: #fff;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #F0F8FF;">

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
<div class="container">
            <div class="header-main">
                    <!-- Branding Image -->
                   <div class="logo">
                      <br>
                                      
                    <a href="#"><h1>Al-Mu'min Charity Trust</h1></a><br>
                </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())  
                                      <br> 
                                      <div class="head-right">
                    <div class="top-nav">
                        
                        <ul>

                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('donate')}}">Donate</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="{{route('news')}}">News</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>

                            <div class="clearfix"> </div>
                        </ul>
                        <!--script-->
                    
                    </div></div>
                             
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>     </div></div>
            </div>

        @yield('content')
    </div>
    <div class="address">
        <div class="container">
            <div class="address-top">
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                    <p><label>Al-Mu'min Charity Trust</label>
                        Yews Hill Road, Lockwood
                        Huddersfield, HD1</p>
                </div>
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                    <p>01484 123 456 ,
                    <br>01484 654 321</p>
                </div>
                <div class="col-md-4 add-left">
                    <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    <p><a href="mailto:shoaib.7291@gmail.com">AMCT@gmail.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<div class="footer">
        <div class="container">
            <div class="footer-top">
                <a href="index.html"><h3>Al-Mu'min</h3></a>
                <p>© 2017 Al-Mu'min Charity Trust. All Rights Reserved | Created by Shoaib Rafiq</p>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
