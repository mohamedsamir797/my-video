@extends('backEnd.layout')

@section('button')
<a href="{{ route('messeges.create')}}" class="btn btn-warning text-align btn-block" style="border-radius:20px;">add messege</a>
@endsection



@section('word')
messeges
@endsection


@section('title')
messeges control
@endsection

@section('side')

@endsection




@section('content')
<table class="table table-striped table-hover">
       <tr class="thead thead-white">
         <th>Name</th>
         <th>messege</th>
         <th>control</th>
       </tr>
        @foreach( $messeges as $messege)
       <tr>
         <td>{{ $messege->name}}</td>
         <td>{{ $messege->messege}}</td>
         <td>
        <div class="row">
          <a href="messeges/{{ $messege->id }}/edit " class="btn btn-primary"><i class="fas fa-edit"></i> edit</a>
          <form  action="{{ route('messeges.destroy',[$messege->id]) }}" method="post">
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
