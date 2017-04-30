<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'Al-Mu min')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<script src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>

<!--start-smoth-scrolling-->
</head>
<body>
	<!--head-->

	<!--head-->
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-main">
				<div class="logo">
					<a href="{{route('home')}}"><h1>Al-Mu'min Charity Trust</h1></a>
				</div>
				<div class="head-right">
					<div class="top-nav" style="font-size: 15px;">
						<span class="menu"><img src="images/nav-icon.png" alt=""> </span>
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
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
					</script>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//header-->
	<!--banner-starts-->
@yield('content')

	<!--address-starts-->
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
	<!--address-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<a href="index.html"><h3>Al-Mu'min</h3></a>
				<p>© 2017 Al-Mu'min Charity Trust. All Rights Reserved | Created by Shoaib Rafiq</p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
