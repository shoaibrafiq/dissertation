@extends('layout.main')
@section('title','News')

@section('content')
<br />
<br />

<div class="container">
 <a href="{{route('news')}}" class="btn btn-default">Go Back</a>
</div>
<br />
                  <div class="thumbnail" >
                      <img  src="{{url('images',$news->image)}}" class="img-responsive">
                    </div>
                      <div style="text-align: center;"class="container col-md-12">
                          <h3><label>{{$news->title}}</label></h3>
                          <h3><label>{{$news->date}}</label></h3>
                          <h3><label>{{$news->category->name}}</label></h3>
                          <p>{{$news->details}}</p>

                           <p>{{$news->description}}</p>

                          <br><br>
                      </div>



@stop