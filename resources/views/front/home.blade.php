@extends('layout.main')

@section('content')

  <div class="banner">
    <div class="container">
      <div class="banner-top">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <div class="banner-text">
                <h3>Syria Needs Your Help!  <p>Urgent Appeal</p></h3>
                </div>
            </li>
            <li>
              <div class="banner-text">
                <h3>Every Penny Counts! <p><a href="{{url('/donate')}}">Donate Now</a><p></h3>
              </div>
            </li>
            <li>
              <div class="banner-text">
                <h3>Providing Food, Water And Shelter For Those In Need</h3>
              </div>
            </li>
          </ul>
        </div>
      </section>
      </div>
    </div>
  </div>
  <!--banner-end-->
  <!--FlexSlider-->
  <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
  <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  <!--End-slider-script-->
  <!--welcome-starts-->
  <div class="welcome">
    <div class="container">
      <div class="welcome-top">
        <div class="col-md-4 welcome-left heading">
          <h2>Welcome</h2>
          <h5>Donec placerat commodo</h5>
          <p>Quisque dictum enim sit amet justo cursus, et venenatis erat facilisis. Donec convallis arcu in purus mattis, vel interdum tellus fringilla.</p>
        </div>
        <div class="col-md-4 welcome-left">
          <div class="welcome-one">
            <div class="wel-left">
              <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Quisque tempus orci quis </h4>
              <p> Vestibulum nec ultrices justo. Donec eu leo quis libero commodo egestas. Cras lacinia pellentesque pretium.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="welcome-two">
            <div class="wel-left">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Quisque tempus orci quis </h4>
              <p> Vestibulum nec ultrices justo. Donec eu leo quis libero commodo egestas. Cras lacinia pellentesque pretium.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 welcome-left">
          <div class="welcome-one">
            <div class="wel-left">
              <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Quisque tempus orci quis </h4>
              <p> Vestibulum nec ultrices justo. Donec eu leo quis libero commodo egestas. Cras lacinia pellentesque pretium.</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="welcome-two">
            <div class="wel-left">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Quisque tempus orci quis </h4>
              <p> Vestibulum nec ultrices justo. Donec eu leo quis libero commodo egestas. Cras lacinia pellentesque pretium.</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--welcome-end-->
  <!--events-starts-->
  <div class="events">
    <div class="container">
      <div class="events-top heading">
        <h3>Latest Events</h3>
        <p>Donec egestas nibh eu ipsum euismod cursus. Aliquam et arcu blandit, efficitur ante a, lacinia neque. Pellentesque lectus neque, vehicula vitae massa ac, malesuada dictum velit.</p>
      </div>
      <div class="events-bottom">
        <div class="col-md-6 event-left">
          <img src="images/e1.jpg" alt="" />
          <div class="event">
            <h4>Vivamus pulvinar lectus eu purus</h4>
            <p> Etiam varius facilisis mauris, vitae consectetur ipsum pellentesque nec. Mauris iaculis mollis ante a sagittis. Sed eu ligula urna. Suspendisse potenti. Donec eu porttitor diam, eget eleifend massa.</p>
          </div>
          <div class="date">
            <p>May 29,2015</p>
          </div>
        </div>
        <div class="col-md-3 event-right">
          <div class="e-1">
            <img src="images/e2.jpg" alt="" />
            <h4>Morbi et facilisis tellus</h4>
          </div>
          <div class="e-2">
            <img src="images/e3.jpg" alt="" />
            <h4>Morbi et facilisis tellus</h4>
          </div>
        </div>
        <div class="col-md-3 event-right">
          <div class="e-1">
            <img src="images/e4.jpg" alt="" />
            <h4>Morbi et facilisis tellus</h4>
          </div>
          <div class="e-2">
            <img src="images/e5.jpg" alt="" />
            <h4>Morbi et facilisis tellus</h4>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--events-end-->
  <!--help-starts-->
  <div class="help">
    <div class="help-left">
      <img src="images/h2.jpg" alt="" />
    </div>
    <div class="help-right heading">
      <h3>We Need Your Help</h3>
      <h5>Mauris iaculis mollis ante a sagittis eget.</h5>
      <p>Praesent iaculis purus at arcu pharetra sodales. Nunc vehicula congue odio ultricies bibendum. Vestibulum vitae varius eros. Curabitur pulvinar tempus pellentesque. Curabitur magna dui, ultricies nec ultrices rutrum, facilisis at augue. Proin laoreet dui gravida dictum euismod. Nullam molestie ante non magna vestibulum imperdiet vitae ac tortor. Praesent sed maximus ligula.</p>
      <div class="tool">
        <a class="tooltips" href="#">
        <span></span></a>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <!--help-end-->
  <!--letter-starts-->
  <div class="letter">
    <div class="container">
      <div class="letter-top heading">
        <h3>Newsletter Subscription</h3>
        <div class="letter-bottom">
          <form>
            <input type="text" value="Enter Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Name';}">
            <input type="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
            <input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--letter-end-->

@endsection
