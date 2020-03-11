@extends('backEnd.layout')




@section('word')
messeges
@endsection


@section('title')
messeges create
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('messeges.store')}}" method="post">
    @csrf
       <div class="form-group">
         <label for="">name</label>
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
         <label for="">messege</label>
         <textarea name="messege" rows="8" cols="80" class="form-control"></textarea>
         @error('messege')
         <p style="color:red;font-size:20px;">{{ $errors->first('messege')}}</p>
         @enderror
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('messeges.index')}}" class="btn btn-danger">back</a>
  </form>
</div>

@endsection
