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
    <form class="row" action="{{ route('videos.update', [ $videos->id ]) }}" method="post" enctype="multipart/form-data">
      @method('PUT')
        @csrf
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">name</label>
           <input type="text" name="name" value="{{$videos->name}}" style="width:400px;" class="form-control" >
           @error('name')
           <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
           @enderror
         </div>
         <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}" class="form-control">

         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">meta_key</label>
           <input type="text" name="meta_keywords" value="{{$videos->meta_keywords}}" style="width:400px;" class="form-control">
           @error('meta_keywords')
           <p style="color:red;font-size:20px;">{{ $errors->first('meta_keywords')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">meta_des</label>
           <input type="text" name="meta_des" value="{{$videos->meta_des}}" style="width:400px;" class="form-control">
           @error('meta_des')
           <p style="color:red;font-size:20px;">{{ $errors->first('meta_des')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">description</label>
           <input type="text" name="des" value="{{$videos->des}}" style="width:400px;" class="form-control">
           @error('des')
           <p style="color:red;font-size:20px;">{{ $errors->first('des')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">youtube</label>
           <input type="text" name="youtube" value="{{$videos->youtube}}" style="width:400px;" class="form-control">
           @error('youtube')
           <p style="color:red;font-size:20px;">{{ $errors->first('youtube')}}</p>
           @enderror
         </div>
         <div class="form-group" style="width:500px;margin:20px;">
           <label for="">image</label>
           <input type="text" name="image" value="{{$videos->image}}" style="width:400px;" class="form-control">
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


         <div class="row" style="width:500px;margin:20px;">
           <div class="col col-9">
             <button type="submit" name="button" class="btn btn-success">Save</button>
             <a href="{{ route('videos.index')}}" class="btn btn-danger">back</a>
           </div>

         </div>

    </form>
<div class="row">
  <div class="col col-6">
  <iframe width="560" height="330" src="{{ $videos->youtube }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="col col-6 pl-5">
  <img src="/img/{{ $videos->image }}" alt="" style="height:300px;width:500px;">

</div>
</div>
</div>

@include('backend.comments.index')
<br>
<br>
@endsection
