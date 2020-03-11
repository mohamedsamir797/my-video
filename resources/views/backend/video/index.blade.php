@extends('backEnd.layout')

@section('button')
<a href="{{ route('videos.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add Video</a>
@endsection



@section('word')
Video
@endsection


@section('title')
Video control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>Name</th>
         <th>published</th>
         <th>username</th>
         <th>video image</th>
         <th>category</th>
         <th>control</th>
       </tr>
        @foreach($videos as $videos)
       <tr>
         <td>{{ $videos->name}}</td>
         <td>{{ $videos->published}}</td>
         <td>{{ $videos->user->name}}</td>
          <td>
            <img src="/img/{{ $videos->image }}" alt="" style="height:50px;width:100px;">
          </td>
         <td>{{ $videos->category->name}}</td>
         <td>
        <div class="row">
          <a href="videos/{{ $videos->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('videos.destroy',[$videos->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" name="button" class="btn btn-danger">Delete</button>
          </form>
        </div>
         </td>
       </tr>
       @endforeach
</table>

@endsection
