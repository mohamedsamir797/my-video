<h2 class="display-4">Comments</h2>
<form  action="{{ route('comments.store')}}" method="post">
  @csrf
  <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}" class="form-control">
  <input type="hidden" name="video_id" value="{{ $videos->id }}" class="form-control">

  <textarea name="comment"class="form-control" style="height:70px;width:600px;"></textarea>
  <button type="submit" name="button" class="btn btn-success">Add comment</button>
</form>
