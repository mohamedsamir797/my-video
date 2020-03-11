<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Comment;
use \App\Video;
use \App\Tag;
use \App\Category;
use \App\Skill;
use \App\VideosComments;




class CommentsController extends Controller
{
     public function index(){
      $comments = Comment::take(5)->latest()->get();
      return view('backend.comments.index',['comments'=>$comments]);
     }
     public function create(){
      $videos = Video::all();
     return view('backend.comments.create',compact('videos'));
     }
     public function store(Request $request){
      $comments = new Comment;
      $comments->video_id = $request->video_id;
      $comments->user_id = $request->user_id;
      $comments->comment = $request->comment;
      $comments->save();
        return back();
     }
     public function destroy($id){
       $comments = Comment::FindOrFail($id);
       $comments->delete();
      return redirect()->route('videos.index');
     }

}
