<div style="background-color:black;">

  <h1 class="display-3">Latest Videos</h1>
  <br>
<div class="container-fluid">
  <div class="row" >
      @foreach( $videos as $video)
    <div class="col col-3 mb-5">
      <a href="{{ route('frontend.video',[ $video->id ])}}" style="text-decoration:none;">
      <div class="card" style="width: 18rem;background-color:black;">
        <img src="/img/{{ $video->image}}" class="card-img-top" style="width:287px;height:180px;">
        <div class="card-body text-dark">
          <h5 class="card-title text-danger">{{ $video->name }}</h5>
          <small class="text-warning">{{ $video->created_at}}</small>
          <p class="card-text text-warning">{{ $video->des}}</p>
        </div>
      </div>
     </a>
    </div>
     @endforeach

  </div>
</div>
<br>
</div>
