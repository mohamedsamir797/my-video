<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Video;
use \App\Category;
use \App\User;
use \App\Skill;
use \App\SkillVideos;
use \App\TagsVideos;
use \App\Tag;
use \App\Comment;
use \App\VideosComments;



class VideoController extends Controller
{
    public function index(){
      $videos = Video::all();
      return view('backend.video.index',['videos'=>$videos]);
    }

    public function create(){
      $skills = Skill::all();
      $tags = Tag::all();
      $category = Category::all();
      return view('backend.video.create',compact('category','skills','tags'));
    }
    public function store(Request $request){
      request()->validate([
        'name'=>'required',
        'meta_keywords'=>'required',
        'meta_des'=>'required',
        'des'=>'required',
        'youtube'=>'required',
        'published'=>'required',
        'cat_id'=>'required',
        'image'=>'required',
      ]);

    $imageName = $request->file('image')->getClientOriginalName();
    $request->file('image')->move('img',$imageName);

      //$video = Video::create($request->all());
     $video = new Video;
     $video->name = $request->name ;
     $video->meta_keywords = $request->meta_keywords ;
     $video->meta_des = $request->meta_des ;
     $video->des = $request->des ;
     $video->youtube = $request->youtube ;
     $video->published = $request->published ;
     $video->cat_id = $request->cat_id ;
     $video->user_id = $request->user_id ;
     $video->image = $imageName ;
     $video->save();


      $skillVideo = new SkillVideos();
      $skillVideo->skill_id = $request->skill_id ;
      $skillVideo->video_id = $video->id ;
      $skillVideo->save();

      $tagVideo = new TagsVideos();
      $tagVideo->tag_id = $request->tag_id ;
      $tagVideo->video_id = $video->id ;
      $tagVideo->save();
      return redirect()->route('videos.index');
    }
    public function edit($id){
     $comments = Comment::where('video_id',$id)->take(4)->latest()->get();
     $skills = Skill::all();
     $tags = Tag::all();
     $category = Category::all();
     $videos = Video::FindOrFail($id);
     return view('backend.video.update',['videos'=>$videos,'category'=>$category,'skills'=>$skills,'tags'=>$tags,'comments'=>$comments]);
    }
    public function update(Request $request , Video $video){
     request()->validate([
       'name'=>'required',
       'meta_keywords'=>'required',
       'meta_des'=>'required',
       'des'=>'required',
       'youtube'=>'required',
       'published'=>'required',
       'cat_id'=>'required',
       'image'=>'required',
     ]);

     $video->update($request->all());

     $skillVideo = new SkillVideos();
     $skillVideo->skill_id = $request->skill_id ;
     $skillVideo->video_id = $video->id ;
     $skillVideo->save();

     $tagVideo = new TagsVideos();
     $tagVideo->tag_id = $request->tag_id ;
     $tagVideo->video_id = $video->id ;
     $tagVideo->save();
     return redirect()->route('videos.index');
    }
    public function destroy($id){
    $videos = Video::FindOrFail($id);
    $videos->delete();
    return redirect()->route('videos.index');
    }

    

}
