@extends('backEnd.layout')




@section('word')
Tag
@endsection


@section('title')
Tag update
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('tags.update',[$tags->id ])}}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="{{ $tags->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('tags.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
