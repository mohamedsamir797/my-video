@extends('backEnd.layout')




@section('word')
Page
@endsection


@section('title')
Page create
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('pages.store')}}" method="post">
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">page description</label>
         <textarea name="page_des" rows="8" cols="80" class="form-control"></textarea>
         @error('page_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('page_des')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">meta keywords</label>
         <input type="text" name="meta_keywords" value="" class="form-control">
         @error('meta_keywords')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">meta description</label>
         <input type="meta_des" name="meta_des" value="" class="form-control">
         @error('meta_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('pages.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
