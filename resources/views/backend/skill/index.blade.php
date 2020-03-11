@extends('backEnd.layout')

@section('button')
<a href="{{ route('skills.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add Skill</a>
@endsection



@section('word')
Skill
@endsection


@section('title')
Skill control
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
        @foreach($skills as $skills)
       <tr>
         <td>{{ $skills->id}}</td>
         <td>{{ $skills->name}}</td>
          <td>
        <div class="row">
          <a href="skills/{{ $skills->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('skills.destroy',[$skills->id]) }}" method="post">
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
