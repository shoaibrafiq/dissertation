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


     <div class="col-md-12 col-md-8 col-md-4">
                <div class="thumbnail thumbnail2" >
                  <div class="date">
            <p>{{$news->date}}</p>
          </div>
                    <img src="{{url('images',$news->image)}}" alt="" class="img-responsive">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>{{$news->title}}</h4>
                            </div>

                            <div class="col-md-12">
                              <a href="{{route('news.show', $news->id)}}" class="btn btn-default">Read More></a>

                            </div>

                        </div>

                        <p> </p>
                    </div>
                </div>
            </div>

    @empty
      <h3>No news </h3>
    @endforelse
    </div>
  </div>
    </div>
  </div>
@endsection
