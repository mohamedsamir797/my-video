<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Video;
use \App\User;

class Comment extends Model
{
   protected $fillable = ['user_id','video_id','comment'];

    public function video(){
      return $this->belongsTo(Video::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
}
