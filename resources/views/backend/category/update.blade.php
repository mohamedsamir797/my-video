@extends('backEnd.layout')




@section('word')
category
@endsection


@section('title')
category update
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('categories.update',[$categorys->id ])}}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="{{ $categorys->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">meta_keywords</label>
         <input type="text" name="meta_keywords" value="{{ $categorys->meta_keywords}}" class="form-control">
         @error('meta_keywords')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
         @enderror
         <input type="hidden" name="id" value="{{ $categorys->id}}" class="form-control">

       </div>
       <div class="form-group">
         <label for="">meta_des</label>
         <input type="text" name="meta_des" value="{{ $categorys->meta_des}}" class="form-control">
         @error('meta_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('categories.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
