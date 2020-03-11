<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use \App\Category;
use \App\Tag;
use \App\Comment;

class Video extends Model
{
    protected $fillable = [
      'name',
      'meta_keywords',
      'meta_des',
      'des',
      'youtube',
      'published',
      'cat_id',
      'user_id',
      'image',
    ];
    public function user(){
      return $this->belongsTo(User::class,'user_id');
    }
    public function category(){
      return $this->belongsTo(Category::class,'cat_id');
    }
    public function skills(){
      return $this->belongsToMany(Skill::class,'videos_skills');
    }
    public function tags(){
      return $this->belongsToMany(Tag::class,'tags_videos');
    }
    public function comments(){
      return $this->hasmany(Comment::class);
    }

}
