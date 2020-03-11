@extends('backEnd.layout')




@section('word')
messege
@endsection


@section('title')
messege update
@endsection

@section('side')

@endsection




@section('content')

<div class="container">
  <form class="form" action="{{ route('messeges.update',[ $messeges->id ]) }}" method="post">
    @method('PUT')
    @csrf
       <div class="form-group">
         <label for="">name</label>
         <input type="text" name="name" value="{{ $messeges->name}}" class="form-control">
         @error('name')
         <p style="color:red;font-size:20px;">{{ $errors->first('name')}}</p>
         @enderror
       </div>

       <div class="form-group">
         <label for="">email</label>
         <input type="text" name="email" value="{{ $messeges->email}}" class="form-control">
         @error('email')
         <p style="color:red;font-size:20px;">{{ $errors->first('email')}}</p>
         @enderror
       </div>
       <div class="form-group">
         <label for="">messege</label>
         <textarea name="messege" rows="8" cols="80" class="form-control">
           {{ $messeges->messege}}
         </textarea>
         @error('messege')
         <p style="color:red;font-size:20px;">{{ $errors->first('messege')}}</p>
         @enderror
         <input type="hidden" name="id" value="{{ $messeges->id}}" class="form-control">
       </div>
       <button type="submit" name="button" class="btn btn-success">Save</button>
       <a href="{{ route('messeges.index')}}" class="btn btn-danger">back</a>
  </form>
  <br>
  <hr>
       <h2>Replay Message</h2>
       @include('backend.mails.replaymessage')
</div>

@endsection
