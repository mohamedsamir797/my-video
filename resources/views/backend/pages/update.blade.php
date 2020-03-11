@extends('backEnd.layout')




@section('word')
Page
@endsection


@section('title')
Page update
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('pages.update',[ $pages->id ]) }}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="{{ $pages->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">page description</label>
         <textarea name="page_des" rows="8" cols="80" class="form-control">
           {{ $pages->meta_keywords}}
         </textarea>
         @error('page_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('page_des')}}</p>
         @enderror
         <input type="hidden" name="id" value="{{ $pages->id}}" class="form-control">

       </div>
       <div class="form-group">
         <label for="">meta_keywords</label>
         <input type="text" name="meta_keywords" value="{{ $pages->meta_keywords}}" class="form-control">
         @error('meta_keywords')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
         @enderror

       </div>
       <div class="form-group">
         <label for="">meta_des</label>
         <input type="text" name="meta_des" value="{{ $pages->meta_des}}" class="form-control">
         @error('meta_des')
         <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('pages.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
