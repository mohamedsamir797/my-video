@extends('backEnd.layout')

@section('button')
<a href="{{ route('tags.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add Skill</a>
@endsection



@section('word')
Tag
@endsection


@section('title')
Tag control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>ID</th>
         <th>Name</th>
           <td>Control</td>
       </tr>
        @foreach($tags as $tags)
       <tr>
         <td>{{ $tags->id}}</td>
         <td>{{ $tags->name}}</td>
          <td>
        <div class="row">
          <a href="tags/{{ $tags->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('tags.destroy',[$tags->id]) }}" method="post">
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
