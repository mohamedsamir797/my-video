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
  <form class="form" action="{{ route('users.update',[$users->id ])}}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">username</label>
         <input type="text" name="name" value="{{ $users->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">email</label>
         <input type="text" name="email" value="{{ $users->email}}" class="form-control">
         @error('email')
         <p style="color:red;font-size:20px;">{{ $errors->first('email')}}</p>
         @enderror
         <input type="hidden" name="id" value="{{ $users->id}}" class="form-control">

       </div>
       <div class="form-group" style="width:500px;margin:20px;">
         <label for="">group</label>
         <select style="width:400px;" name="group" class="form-control">
           <option value="user">user</option>
           <option value="admin">admin</option>
         </select>
         @error('published')
         <p style="color:red;font-size:20px;">{{ $errors->first('published')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('users.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
