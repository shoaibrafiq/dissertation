<br />
<br />
<div class="col-md-3 col-md-offset-0">
  <!--this page is the side navigation for the admin index page when logged in -->
    <div class="sidebar" style=" moz-box-shadow: 1px 2px 4px rgba(0, 0, 0,0.5);
    -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
    box-shadow: 1px 2px 4px rgba(0, 0, 0, .5); display: block;">
        <ul class="nav">

            <li class="current"><a href="{{url('admin')}}">
                    Dashboard</a></li>
            <li class="current"><a href="{{route('news.index')}}">
                            All News</a></li>
           <li class="current"><a href="{{route('news.create')}}">
                            Add News</a></li>
           <li class="current"><a href="{{route('category.index')}}">
                                  Categories</a></li>




        </ul>
    </div>
</div>
