@extends('backEnd.layout')

@section('button')
<a href="{{ route('categories.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add Category</a>
@endsection



@section('word')
category
@endsection


@section('title')
category control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>ID</th>
         <th>Name</th>
         <th>meta_keywords</th>
         <th>meta_des</th>
         <th>control</th>
       </tr>
        @foreach($categorys as $categorys)
       <tr>
         <td>{{ $categorys->id}}</td>
         <td>{{ $categorys->name}}</td>
         <td>{{ $categorys->meta_keywords}}</td>
         <td>{{ $categorys->meta_des}}</td>
         <td>
        <div class="row">
          <a href="categories/{{ $categorys->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('categories.destroy',[$categorys->id]) }}" method="post">
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
