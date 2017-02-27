
@extends('layout.main')
@section('title', 'Contact')


@section('content')
<!--contact-starts-->
<div class="contact">
  <div class="container">
    <div class="contact-top heading">
      <h2>Contact Us</h2>
    </div>
    <div class="map">
      <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Yews%20Hill%20Road%2C%20hd1&key=AIzaSyD_bBbGWKiha8ik6UHxg0_Z5_mgq2e9X7I" allowfullscreen></iframe>
    </div>
    <div class="contact-form heading">
      <h3>Contact Form</h3>
      <p>Donec egestas nibh eu ipsum euismod cursus. Aliquam et arcu blandit, efficitur ante a, lacinia neque. Pellentesque lectus neque, vehicula vitae massa ac, malesuada dictum velit.</p>
      <div class="contact-bottom">
        <form>
          <input type="text" placeholder="Name">
          <input type="text" placeholder="Email">
          <input type="text" placeholder="Phone">
          <textarea placeholder="Message" required></textarea>
          <div class="submit-btn">
            <input type="submit" value="SUBMIT">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--contact-end-->
@endsection
