@extends('layout.main')
@section('title', 'News')


@section('content')
  <div class="gallery">
    <div class="container">
      <div class="events">
    <div class="container">
      <div class="events-top heading">
        <h3>Latest News</h3>
        <p>Donec egestas nibh eu ipsum euismod cursus. Aliquam et arcu blandit, efficitur ante a, lacinia neque. Pellentesque lectus neque, vehicula vitae massa ac, malesuada dictum velit.</p>
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
