<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Video;
use \App\Category;
use \App\Skill;
use \App\Comment;
use \App\Messege;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['category','video','commentupdate','destroy','createComment']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videos = Video::take(30)->latest()->get();
        return view('home',['videos'=>$videos]);
    }
    public function category($id){
      $cat = Category::findOrFail($id);
      $videos = Video::where('cat_id',$id)->paginate(30);
      return view('frontend.category.index',['videos'=>$videos,'cat'=>$cat]);
    }

    public function video($id){
      $videos = Video::findOrFail($id);
      return view('frontend.video.index',['videos'=>$videos]);
    }

    public function commentupdate($id = null,Request $request){
      $videos = Video::take(30)->latest()->get();
      $comment = Comment::findOrFail($id);
      if (($comment->user_id == auth()->user()->id) || auth()->user()->group == 'admin') {
      $comment->update($request->all());
      }
    return back();
    }
    public function destroy($id = null){
      $videos = Video::take(30)->latest()->get();
      $comment = Comment::findOrFail($id);
      $comment->delete();
      return back();
    }
    public function createComment(Request $request,$id = null){
      $videos = Video::findOrFail($id);
      $comment = new Comment;
      $comment->comment = $request->comment;
      $comment->user_id = $request->user_id;
      $comment->video_id = $request->video_id;
      $comment->save();
      return back();
    }
    public function formMessege(Request $request){
      request()->validate([
        'name'=>'required',
        'email'=>'required',
        'messege'=>'required',
      ]);
      $messege = new Messege;
      $messege->name = $request->name;
      $messege->email = $request->email;
      $messege->messege = $request->messege;
      $messege->save();
      return back();
    }

    public function welcomeVideos(){
      $videos = Video::take(8)->latest()->get();
      return view('welcome',['videos'=>$videos]);
    }


}
