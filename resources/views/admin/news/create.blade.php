@extends('admin.layout.admin')

@section('content')

<!--this is the create page where the user can add news -->
<br>
<!--used old laravel 4 form method as new version was not working -->
  <div style="moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-3 row">
<h3>Add News</h3>
{!! Form::open(['route' => 'news.store', 'method' => 'post', 'files' => true]) !!} <!--fetching info from productscontroller  -->

<div class="form-group">

  {{ Form::label('title', 'Title') }}
{{ Form::text('title', null, array('class' => 'form-control')) }}
</div>

<div class="form-group">

  {{ Form::label('details', 'Details') }}
  {{ Form::text('details', null, array('class' => 'form-control')) }}
</div>
<div class="form-group">
  <div class="form-group">

    {{ Form::label('date', 'Date') }}
    {{ Form::text('date', null, array('class' => 'form-control')) }}
  </div>
  <div class="form-group">

  {{ Form::label('image', 'Image') }}
  {{ Form::file('image',array('class' => 'form-control')) }}
</div>

<div class="form-group">

  {{ Form::label('category_id', 'Categories') }}
  {{ Form::select('category_id', $categories, null, array('class' => 'form-control', 'placeholder' => 'Select')) }}
</div>


{{ Form::submit('Create', array('class' => 'btn btn-default'))}}
{!! Form::close() !!}

  </div>

@endsection
