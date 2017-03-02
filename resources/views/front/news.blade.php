@extends('layout.main')
@section('title', 'News')


@section('content')
  <div class="gallery">
    <div class="container">
      <div class="events">
    <div class="container">
      <div class="events-top heading">
        <h3>Latest News</h3>
        <p>Here are a news updates about our latest projects and events, from Fundraising Activities in the local community to Project Updates and more... <a href="{{url('/donate')}}">Click here to Donate for anyone of these projects</a></p>
      </div>
      @forelse ($news as $news)


      <div style="justify-content: center;
      align-items: center; display: flex;" class="events-bottom">
        <div class="col-md-6">
          <img style="width:550px; height:300px;"src="{{url('images',$news->image)}}" alt="" />
          <div class="event">
            <h4>{{$news->title}}</h4>
            <p>{{$news->details}}</p>
          </div>
          <div class="date">
            <p>{{$news->date}}</p>
          </div>
        </div>

        <div class="clearfix"></div>
      </div>
    @empty
      <h3>No news </h3>
    @endforelse
    </div>
  </div>
    </div>
  </div>
@endsection
