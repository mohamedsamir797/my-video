@extends('layouts.app')
<style media="screen">

</style>

@section('content')
<div class="container-fluid" >
   <h1 class="display-3">{{ $cat->name}}</h1>


        <div class="row">
            @foreach( $videos as $video)
          <div class="col col-3">
            <a href="#" style="text-decoration:none;">
            <div class="card" style="width: 18rem;">
              <a href="{{ route('frontend.video',[ $video->id ])}}">
              <img src="/img/{{ $video->image}}" class="card-img-top" style="width:287px;height:180px;">
              <div class="card-body text-dark">
                <h5 class="card-title text-danger">{{ $video->name }}</h5>
                <small>{{ $video->created_at}}</small>
                <p class="card-text">{{ $video->des}}</p>
              </div>
              </a>
            </div>
           </a>
          </div>
           @endforeach

        </div>
</div>
@endsection
