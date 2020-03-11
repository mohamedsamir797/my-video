@extends('backEnd.layout')




@section('word')
Skill
@endsection


@section('title')
skill update
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('skills.update',[$skills->id ])}}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="{{ $skills->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('skills.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
