@extends('admin.layout.admin')

@section('content')

  <!--this page shows all the products listed with IDs admin can click delete, edit and view -->


  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
<h3>News List</h3>
<br />

  @forelse ($news as $news)

  <h4>Product ID: {{$news->id}}</h4>
  <h4>Product Name: {{$news->title}}</h4>
  <a class="btn btn-sm btn-success" href="{{route('news', $news->id)}}">View</a>

<br />
<br />



@empty

  <h3>No News to show</h3>
@endforelse


  </div>

@endsection
