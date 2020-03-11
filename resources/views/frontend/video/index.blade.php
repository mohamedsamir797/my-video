@extends('layouts.app')
<style media="screen">

</style>

@section('content')
<div class="container-fluid">


            <h1 class="display-3">{{ $videos->name}}</h1>


              <iframe  style="margin-left:100px;"width="1200px" height="700px" src="{{ $videos->youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body text-dark">
                <div class="row">
                  <div class="col col-3" style="margin-left:100px;">
                    @foreach( $videos->tags as $tag )
                    <span class="badge badge-success">{{ $tag->name }}</span>
                     @endforeach
                     <span class="badge badge-warning">{{ $videos->category->name }}</span>
                     <br><br>
                    <h5 class="card-title text-danger">{{ $videos->name }}</h5>
                  </div>
                  <div class="col col-3" >
                      <h3> {{ $videos->user->name}}</h3>
                  </div>
                  <div class="col col-3">
                      <small style="color:white;">{{ $videos->created_at}}</small>
                  </div>
              </div>
              <div class="" style="margin-left:100px;">
                <p class="card-text" style="color:white;">{{ $videos->des}}</p>

              </div>


          </div>
            <div class="container" id="comment" >

                <table class="table table-striped text-white" style="width:800px;">
                  <h4>Comments ({{ count($videos->comments) }})</h4>
                     @foreach( $videos->comments as $comment )

                       <tr>

                              <td class="bg-light text-dark" style="font-weight:bold;">
                                <div class="row">
                                   <div class="col col-8">
                                     <p>{{$comment->user->name}}<br>
                                      {{$videos->created_at}}
                                     </p>
                                        {{ $comment->comment}}
                                   </div>
                                   <div class="col col-4">

                                    @if((auth()->user()->group == 'admin') || (auth()->user()->id == $comment->user->id) )
                                      <form action="{{route('frontend.comments.delete',[$comment->id])}}">
                                        @csrf
                                        @method('DELETE')
                                       <button type="submit" class="btn btn-danger">delete</button>
                                      </form>
                                   </div>
                                </div>
                                <br>
                                <a href="" onclick="$(this).next('div').slideToggle(1000);return false;">Edit</a>
                                <div style="display:none;">
                                  <form action="{{route('frontend.comments',[$comment->id])}}" method="POST">
                                    @csrf
                                  <input type="text" name="comment" >
                                  <button type="submit" class="btn btn-secondary">save</button>
                                  </form>
                                </div>

                                  @endif

                              </td>
                       </tr>
                      @endforeach
                </table>
                @if(auth()->user())
                 <form class="" action="{{ route('frontend.comment.create',[ $videos->id ])}}" method="post">
                   @csrf
                   <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}" class="form-control">
                   <input type="hidden" name="video_id" value="{{ $videos->id }}" class="form-control">

                   <label class="display-4">Add comment </label>
                   <input type="text" name="comment"  style="width:800px;">
                   <button type="submit" class="btn btn-secondary mt-2">Add</button>
                 </form>
                 @endif
            </div>


</div>
@endsection
