<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Video;
class Tag extends Model
{
    protected $fillable = ['name'];

    public function videos(){
      return $this->belongsToMany(Video::class,'tags_videos');
    }
}
