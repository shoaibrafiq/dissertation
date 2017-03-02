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
					<h4>"Every act of goodness is charity." - Sahih Muslim, Hadith 496</h4>
					<p>Al-Mu'min charity Trust is a UK-based international relief and development charity established in Huddersfield, England since 2006. Inspired by the Islamic teachings of empathy, generosity and selflessness, the trust aims to alleviate poverty and suffering across the world.</p>
			<p>All donated funds are monitored and reviewed by well trained employees who ensure Zakah, Sadaqah and Lillah funds are spent correctly.</p>
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
				<h3>Why Choose Us</h3>
					<p>The rights of those who are neglected and oppressed are fulfilled by providing sustainable development solutions relating to shelter, education, health, and spiritual wellbeing.</p>
			</div>
			<div class="why-bottom">
				<div class="col-md-7 why-left">
					<div class="why-1">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						<div class="why-text">
							<h4>Our vision</h4>
							<p>We want to see the whole world united to eleviate the suffering on this earth and help the poor and needy. </p>
						</div>
					</div>
					<div class="why-2">
						<span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
						<div class="why-text">
							<h4>Our mission</h4>
							<p>The mission is to first help the poor, homeless, refugees etc. in our community then every suffering person in the UK and finally worldwide.</p>
						</div>
					</div>
					<div class="why-2">
						<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
						<div class="why-text">
							<h4>Our history</h4>
							<p>Our humble beginnings were a small book shop in huddersfield which is now expanding to a charity organisation.</p>
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
							<h4>John Doe</h4>
							<p>Owner/ Manager</p>
						</div>
						<div class="team-text">
							<h5>John Doe</h5>
							<p>Owner/ Manager</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t2.jpg" alt="">
						<div class="captn">
							<h4>Adaline</h4>
							<p>Project Coordinator</p>
						</div>
						<div class="team-text">
							<h5>Adaline</h5>
							<p>Project Coordinator</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t3.jpg" alt="">
						<div class="captn">
							<h4>Ali</h4>
							<p>IT Manager</p>
						</div>
						<div class="team-text">
							<h5>Ali</h5>
							<p>IT Manager</p>
						</div>
					</a>
				</div>
				<div class="col-md-3 team-left wow bounceIn animated" data-wow-delay=".5s" style="visibility: visible; -webkit-animation-delay: .5s;">
					<a href="#">
						<img src="images/t4.jpg" alt="">
						<div class="captn">
							<h4>Selena</h4>
							<p>Fundraising Representative</p>
						</div>
						<div class="team-text">
							<h5>Selena</h5>
							<p>Fundraising Representative</p>
						</div>
					</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--team-end-->

@endsection
