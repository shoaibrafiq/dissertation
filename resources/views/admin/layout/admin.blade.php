<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>
@include('admin.layout.includes.header')
<!--this page is the admin index page when logged in, the sidenav and header are included here -->
    
        @include('admin.layout.includes.sidenav')
        <div class="col-md-9 display-area">
            <div class="row text-center">
                <div class="col-md-8  ">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->


<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>


</body>
</html>
