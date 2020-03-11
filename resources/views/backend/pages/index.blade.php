@extends('backEnd.layout')

@section('button')
<a href="{{ route('pages.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add page</a>
@endsection



@section('word')
Page
@endsection


@section('title')
page control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>ID</th>
         <th>Name</th>
         <th>page description</th>
         <th>meta keywords</th>
         <th>meta description</th>
         <th>control</th>
       </tr>
        @foreach($pages as $pages)
       <tr>
         <td>{{ $pages->id}}</td>
         <td>{{ $pages->name}}</td>
         <td>{{ $pages->page_des}}</td>
         <td>{{ $pages->meta_keywords}}</td>
         <td>{{ $pages->meta_des}}</td>
         <td>
        <div class="row">
          <a href="pages/{{ $pages->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('pages.destroy',[$pages->id]) }}" method="post">
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
