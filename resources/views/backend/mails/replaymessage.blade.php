
<form  action="{{ route('replaymessage')}}" method="post">
  @csrf
 <div class="form-group">
   <label for="">name</label>
   <input type="text" name="mailname" class="form-control">
   @error('mailname')
   <p style="color:red;font-size:20px;">{{ $errors->first('mailname')}}</p>
   @enderror
 </div>
 <div class="form-group">
   <label for="">email</label>
   <input type="text" name="mailemail" class="form-control">
   @error('mailemail')
   <p style="color:red;font-size:20px;">{{ $errors->first('mailemail')}}</p>
   @enderror
 </div>
 <div class="form-group">
   <label for="">messege</label>
   <input type="text" name="mailmessage" class="form-control">
   @error('mailmessage')
   <p style="color:red;font-size:20px;">{{ $errors->first('mailmessage')}}</p>
   @enderror
 </div>
 <button type="submit" name="button" class="btn btn-primary mt-2">replay message</button>
</form>
