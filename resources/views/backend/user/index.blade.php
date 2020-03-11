@extends('backEnd.layout')

@section('button')
<a href="{{ route('users.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add user</a>
@endsection



@section('word')
user
@endsection


@section('title')
Users Control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>ID</th>
         <th>Name</th>
         <th>email</th>
         <th>group</th>
         <th>control</th>
       </tr>
        @foreach($users as $user)
       <tr>
         <td>{{ $user->id}}</td>
         <td>{{ $user->name}}</td>
         <td>{{ $user->email}}</td>
         <td>{{ $user->group}}</td>
         <td>
        <div class="row">
          <a href="users/{{$user->id}}/edit" class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
           <form class="" action="{{ route('users.destroy',[$user->id])}}" method="post">
            @method('delete')
            @csrf
            <button type="submit" name="button" class="btn btn-danger">Delete</button>
           </form>
        </div>
         </td>
       </tr>
       @endforeach
</table>

@endsection
