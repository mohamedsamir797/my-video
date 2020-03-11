@extends('backEnd.layout')




@section('word')
Video
@endsection


@section('title')
Video create
@endsection

@section('side')

@endsection




@section('content')


<div class="container">
    <form class="row" action="{{ route('videos.store')}}" method="post" enctype="multipart/form-data">
      @csrf

      <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}" class="form-control">


         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">name</label>
           <input type="text" name="name" value="" style="width:400px;" class="form-control" >
           @error('name')
           <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">meta_key</label>
           <input type="text" name="meta_keywords" value="" style="width:400px;" class="form-control">
           @error('meta_keywords')
           <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">meta_des</label>
           <input type="text" name="meta_des" value="" style="width:400px;" class="form-control">
           @error('meta_des')
           <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">description</label>
           <input type="text" name="des" value="" style="width:400px;" class="form-control">
           @error('des')
           <p style="color:red;font-size:20px;">{{ $errors->first('des')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">youtube</label>
           <input type="text" name="youtube" value="" style="width:400px;" class="form-control">
           @error('youtube')
           <p style="color:red;font-size:20px;">{{ $errors->first('youtube')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">image</label>
           <input type="file" name="image" value="" style="width:400px;" class="form-control">
           @error('image')
           <p style="color:red;font-size:20px;">{{ $errors->first('youtube')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">published</label>
           <select style="width:400px;" name="published" class="form-control">
             <option value="1">published</option>
             <option value="0">hidden</option>
           </select>
           @error('published')
           <p style="color:red;font-size:20px;">{{ $errors->first('published')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">category</label>
           <select style="width:400px;" name="cat_id" class="form-control">
             @foreach($category as $category)
             <option value="{{ $category->id }}">{{ $category->name}}</option>
             @endforeach
           </select>
           @error('published')
           <p style="color:red;font-size:20px;">{{ $errors->first('published')}}</p>
           @enderror
         </div>

         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">Skills</label>
           <select style="width:400px;" name="skill_id" multiple class="form-control">
             @foreach($skills as $skill)
             <option value="{{ $skill->id }}">{{ $skill->name}}</option>
             @endforeach
           </select>
           @error('skill_id')
           <p style="color:red;font-size:20px;">{{ $errors->first('skill_id')}}</p>
           @enderror
         </div>

         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">Tags</label>
           <select style="width:400px;" name="tag_id" multiple class="form-control">
             @foreach($tags as $tag)
             <option value="{{ $tag->id }}">{{ $tag->name}}</option>
             @endforeach
           </select>
           @error('tag_id')
           <p style="color:red;font-size:20px;">{{ $errors->first('tag_id')}}</p>
           @enderror
         </div>



         <div class="form-group" style="width:500px;margin:20px;">
           <button type="submit" name="button" class="btn btn-success">Save</button>
           <a href="{{ route('videos.index')}}" class="btn btn-danger">back</a>
         </div>
    </form>

</div>

@endsection
