@extends('admin.layout.admin')

@section('content')


  <!--this is the edit page where the user can edit products and when submitted it updates -->

  <!--used old laravel 4 form method as new version was not working -->
  <div style="margin-left:250px;  moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
  -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
  box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;"class="col-md-12 col-md-offset-2 row">
<h3>Edit News</h3>
{!! Form::model($news, [
    'method' => 'PATCH',
    'route' => ['news.update', $news->id]
]) !!}   <!--fetching info from productscontroller  -->

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

{{ Form::submit('Update', array('class' => 'btn btn-default'))}}
{!! Form::close() !!}

  </div>

@endsection
