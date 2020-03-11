@extends('backEnd.layout')




@section('word')
category
@endsection


@section('title')
category create
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('categories.store')}}" method="post">
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">meta_keywords</label>
         <input type="text" name="meta_keywords" value="" class="form-control">
         @error('meta_keywords')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">meta_des</label>
         <input type="text" name="meta_des" value="" class="form-control">
         @error('meta_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('categories.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
