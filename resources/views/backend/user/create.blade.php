@extends('backEnd.layout')




@section('word')
user
@endsection


@section('title')
Users create
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('users.store')}}" method="post">
    @csrf
       <div class="form-group">
         <label for="">username</label>
         <input type="text" name="name" value="" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">email</label>
         <input type="text" name="email" value="" class="form-control">
         @error('email')
         <p style="color:red;font-size:20px;">{{ $errors->first('email')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">password</label>
         <input type="password" name="password" value="" class="form-control">
         @error('password')
         <p style="color:red;font-size:20px;">{{ $errors->first('password')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('users.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
