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
          <h2>Syria In Chaos</h2>

          <p>Syria's civil war has created the worst humanitarian crisis of our time. Half the country's pre-war population — more than 11 million people — have been killed or forced to flee their homes. Families are struggling to survive inside Syria, or make a new home in neighboring countries.</p>
        <br><h5><a href="{{url('/donate')}}">Donate Now</a></h5></div>
        <div class="col-md-4 welcome-left">
          <div class="welcome-one">

            <div class="wel-right">
          <iframe width="660" height="315" src="https://www.youtube.com/embed/KKoRqxLKCjQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
          </div>

        </div>

    </div>
  </div>

  <div class="container2">
    <hr>
    <div class="container">
      <div class="welcome-top">
        <div class="col-md-4 welcome-left heading">
          <h2>Our Charitys</h2>
  <h5> Long Term Goals: </h5>
          <p>The Messenger of God Muhammed (Peace Be Upon Him) said, 'The believers, in their love, mutual kindness, and close ties, are like one body; when any part complains, the whole body responds to it with wakefulness and fever.' - Muslim</p>
        </div>
        <div class="col-md-4 welcome-left">
          <div class="welcome-one">
            <div class="wel-left">
              <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Showing Kindness </h4>
              <p>"A tree is known by its fruit; a man by his deeds. A good deed is never lost; he who sows courtesy reaps friendship, and he who plants kindness gathers love."</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="welcome-two">
            <div class="wel-left">
              <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Aid For All </h4>
              <p>“There is nothing more beautiful than someone who goes out of their way to make life beautiful for others.”</p>
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
              <h4>One Earth, One Body </h4>
              <p>"History teaches us that unity is strength, overcome our differences in the quest for common goals, to strive, with all our combined strengh."</p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="welcome-two">
            <div class="wel-left">
              <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            </div>
            <div class="wel-right">
              <h4>Educating The Masses </h4>
              <p>"The secret of freedom lies in educating people, whereas the secret of tyranny is in keeping them ignorant."</p>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>

    </div>
  </div>
  <hr />
</div>

  <!--welcome-end-->
  <!--events-starts-->
  <div class="events">
    <div class="container">
      <div class="events-top heading">
        <h3>Latest Events</h3>
        <p>Here are a few news updates which can be found in the <a href="{{url('/news')}}">News Feed</a> From Fundraising Activities in the local community to Project Updates and more... </p>
      </div>
      <div class="events-bottom">
        <div class="col-md-6 event-left">
          <img src="images/e1.jpg" alt="" />
          <div class="event">
            <h4>Syria Crisis Update</h4>
            <p>All praises due to god, our charity organistion visited Turkey this month where they provided Food, Shelter, Water and Clothing to almost 5000 refugees. With your donations we can provide more for the poor children.  <a href="{{url('/donate')}}">Donate Here</a>  </p>
          </div>
          <div class="date">
            <p>23rd February 2017</p>
          </div>
        </div>
        <div class="col-md-3 event-right">
          <div class="e-1">
            <img src="images/e2.jpg" alt="" />
            <h4>Car Wash Event</h4>
          </div>
          <div class="e-2">
            <img src="images/e3.jpg" alt="" />
            <h4>Charity Dinner</h4>
          </div>
        </div>
        <div class="col-md-3 event-right">
          <div class="e-1">
            <img src="images/e4.jpg" alt="" />
            <h4>Fair at Greenhead Park</h4>
          </div>
          <div class="e-2">
            <img src="images/e5.jpg" alt="" />
            <h4>Charity Stalls</h4>
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
      <h5>Volunteers Needed</h5>
      <p>Al-Mu'min Charity Trust is a fast growing islamic charity organistation based in Huddersfield but will soon be expanding nationwide. We are giving people a good opportunity to volunteer in something great. Please visit our shop or email us for more information.  </p>
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
