
@extends('layout.main')
@section('title', 'Donation Successful')


@section('content')


<h2>Thank You For Your Donation!</h2><br>
<p>You will recieve and email shortly containing your reciept. </p>
<br>
<p><a href="{{url('/')}}">Click Here to go back to the homepage</a></p><br>
<p><a href="{{url('news')}}">Or find out about our recent projects</a></p>
	</div><br><br><br><br><br>
@endsection
