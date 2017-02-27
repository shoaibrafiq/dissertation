@extends('layout.main')
@section('title', 'About')


@section('content')
  <!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-top heading">
				<h2>About Us</h2>
			</div>
			<div class="about-bottom">
				<div class="col-md-5 about-left">
					<img src="images/abt1.jpg" alt="" />
				</div>
				<div class="col-md-7 about-right">
					<h4>Nam sollicitudin massa commodo hendrerit auctor. In hac habitasse platea dictumst. Sed id dolor vehicula.</h4>
					<p>Vivamus venenatis quam a urna ornare, nec sagittis sem consectetur. Vestibulum mollis mollis elit nec ullamcorper. Aenean erat elit, consectetur sed ipsum eu, faucibus posuere massa.</p>
					<p>Nullam non neque neque. Sed sit amet sagittis purus. Nullam eget accumsan nibh. Suspendisse et sapien luctus, facilisis magna ut, placerat nisi. Ut fringilla lacus quis justo luctus tincidunt.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<!--why-starts-->
	<div class="why">
		<div class="container">
			<div class="why-top heading">
				<h3>why Choose Us</h3>
				<p>Donec egestas nibh eu ipsum euismod cursus. Aliquam et arcu blandit, efficitur ante a, lacinia neque. Pellentesque lectus neque, vehicula vitae massa ac, malesuada dictum velit.</p>
			</div>
			<div class="why-bottom">
				<div class="col-md-7 why-left">
					<div class="why-1">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						<div class="why-text">
							<h4>My vision</h4>
							<p>Proin pretium ante in lacinia sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
					</div>
					<div class="why-2">
						<span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
						<div class="why-text">
							<h4>My mission</h4>
							<p>Proin pretium ante in lacinia sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
					</div>
					<div class="why-2">
						<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						<div class="why-text">
							<h4>My history</h4>
							<p>Proin pretium ante in lacinia sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
						</div>
					</div>
				</div>
				<div class="col-md-5 why-right">
					<img src="images/w1.jpg" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--why-end-->
	<!--team-starts-->
	<div class="team">
		<div class="container">
			<div class="team-top heading">
				<h3>Our Staff</h3>
			</div>
			<div class="team-bottom">
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t1.jpg" alt="">
						<div class="captn">
							<h4>Jane Doe</h4>
							<p>Nam id urna ipsum</p>
						</div>
						<div class="team-text">
							<h5>Jane Doe</h5>
							<p>Nam id urna ipsum</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t2.jpg" alt="">
						<div class="captn">
							<h4>Adaline</h4>
							<p>Nam id urna ipsum</p>
						</div>
						<div class="team-text">
							<h5>Adaline</h5>
							<p>Nam id urna ipsum</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t3.jpg" alt="">
						<div class="captn">
							<h4>Thomas</h4>
							<p>Nam id urna ipsum</p>
						</div>
						<div class="team-text">
							<h5>Thomas</h5>
							<p>Nam id urna ipsum</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t4.jpg" alt="">
						<div class="captn">
							<h4>Selena</h4>
							<p>Nam id urna ipsum</p>
						</div>
						<div class="team-text">
							<h5>Selena</h5>
							<p>Nam id urna ipsum</p>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->

@endsection
