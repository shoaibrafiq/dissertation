@extends('layout.main')
@section('title', 'Donate')


@section('content')
<div class="container">
        <h3 class="text-center">Donate Now</h3>
        <div class="container">

<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Amount</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Your Info</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Payment</p>
      </div>
    </div>
  </div>

  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-sm-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Amount</h3>
          <div class="form-group">

        <ul class="list-unstyled">
                    <li><button type="button" id="p1" class="btn btn-primary btn-xl btn-block">£15</button></li><br>
                    <li><button type="button" id="p2" class="btn btn-primary btn-xl btn-block">£25</button></li><br>
                    <li><button type="button" id="p3" class="btn btn-primary btn-xl btn-block">£50</button></li><br>
                    <li><button type="button" id="p4" class="btn btn-primary btn-xl btn-block">£75</button></li><br>
                    <li><button type="button" id="p5" class="btn btn-primary btn-xl btn-block">£100</button></li><br>
                    <li>
                        <div class="control-group">
                          <div class="form-control-donate controls">
                            <input name="textinput" placeholder="£ Other Amount" class="form-control" type="text">
                          </div>
                        </div>
                    </li>
                </ul><br>

                <p>Please Select a Project:</p>  <select class="form-control">
  <option>Syria Emergency</option>
  <option>Hospital in Syria</option>
  <option>Food for Families</option>
  <option>Water Wells</option>
  <option>Feed a Family of 5</option>
</select>




                <br>
                <form class="form-horizontal text-center">
                        <fieldset>
                        <div class="form-group">
                          <div class="col-md-12">
                            <label class="radio-inline" for="radios-s">
                              <input name="radios" id="radios-s" value="1" checked="checked" type="radio">
                              Single Donation
                            </label>
                            <label class="radio-inline" for="radios-m">
                              <input name="radios" id="radios-m" value="2" type="radio">
                              Monthly Donation
                            </label>
                          </div>
                      </div>
                      </fieldset>
                    </form>
          </div>

          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-sm-6 col-md-offset-3">
        <div class="col-md-12">
          <h3>Personal Information</h3>

          <div class="form-group">
            <label class="control-label">First Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name">
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name">
          </div>
           <p>Country </p>  <select class="form-control">
  <option>UK</option>
  <option>USA</option>
  <option>France</option>
  <option>Germany</option>
  <option>Belgium</option>
  <option>Other..</option>
</select><br>
          <div class="form-group">
            <label class="control-label">House Number</label>
            <input maxlength="11" type="text" required="required" class="form-control" placeholder="Enter House Number">
          </div>

          <div class="form-group">
            <label class="control-label">Address</label>
            <textarea required="required" class="form-control" placeholder="Enter your address"></textarea>
              <div class="form-group">
            <label class="control-label">City</label>
            <input maxlength="20" type="text" required="required" class="form-control" placeholder="Enter City">
          </div>
          <div class="form-group">
           <label class="control-label">Postcode</label>
            <input maxlength="20" type="text" required="required" class="form-control" placeholder="Enter Postcode">
          </div>
          <div class="form-group">
           <label class="control-label">Email</label>
            <input  type="email" required="required" class="form-control" placeholder="Enter email">
          </div>
          <div class="form-group">
           <label class="control-label">Phone Number</label>
            <input maxlength="20" type="numbers" required="required" class="form-control" placeholder="Enter Phone Number">
          </div>
          </div>

          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class=" col-sm-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Payment Method</h3>
<br>
<div class="form-group">
      <label class="col-sm-6 control-label"  for="textinput">Card Holder's Name</label>
      <div class="col-sm-6">
        <input type="text" name="cardholdername" maxlength="70" placeholder="Card Holder Name" class="card-holder-name form-control">
      </div>
    </div><br>

    <!-- Card Number -->
    <div class="form-group">
      <label class="col-sm-6 control-label" for="textinput">Card Number</label>
      <div class="col-sm-6">
        <input type="text" id="cardnumber" maxlength="19" placeholder="Card Number" class="card-number form-control">
      </div>
    </div>

    <!-- Expiry-->
    <div class="form-group">
      <label class="col-sm-6 control-label" for="textinput">Card Expiry Date</label>
      <div class="col-sm-6">
        <div class="form-inline">
          <select name="select2" data-stripe="exp-month" class="card-expiry-month required form-control">
            <option value="01" selected="selected">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <span> / </span>
          <select name="select2" data-stripe="exp-year" class="card-expiry-year required form-control">
          </select>
          <script type="text/javascript">
            var select = $(".card-expiry-year"),
            year = new Date().getFullYear();

            for (var i = 0; i < 12; i++) {
                select.append($("<option value='"+(i + year)+"' "+(i === 0 ? "selected" : "")+">"+(i + year)+"</option>"))
            }
        </script>
        </div>
      </div>
    </div>

    <!-- CVV -->
    <div class="form-group">
      <label class="col-sm-6 control-label" for="textinput">CVV/CVV2</label>
      <div class="col-sm-3">
        <input type="text" id="cvv" placeholder="CVV" maxlength="4" class="card-cvc form-control">
      </div>
    </div>
     <div class="clearfix"></div>
<br>
<div class="text-center col-sm-8">
<br>
<p >Donate Using Paypal: </p></div><br>
 <div class="clearfix"></div>
<div class="container container1 col-sm-8 ">

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="EFTTTC7FNEPRS">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form></div> <div class="clearfix"></div>




<br>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
         <p> <a class="btn btn-success btn-lg pull-right" href="{{url('success')}}">Submit</a></p>
        </div>
      </div>
    </div>
  </form>

</div>

        </div>
      @endsection
