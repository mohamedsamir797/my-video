<br>
<br>
<div class="container" style="margin-top:80px;">
  @include('backend.comments.create')
  <table>
     @foreach($comments as $comment)
         <tr>
              <td style="padding:20px;width:500px;border-radius:10px;border:solid gray 0.5px;">

              <div class="row">
               <div class="col col-6">
                 {{$comment->user->name }}<br>
               </div>
               <div class="col col-6">
                 <form class="" action="{{ route('comments.destroy',[ $comment->id ])}}" method="post">
                  @method('DELETE')
                  @csrf
                   <button type="submit" name="button" class="btn btn-outline-danger">delete</button>
                 </form>

               </div>
              </div>

                <p>  {{$comment->created_at }}</p>
                {{ $comment->comment }}
              </td>
         </tr>
            @endforeach
  </table>
</div>
