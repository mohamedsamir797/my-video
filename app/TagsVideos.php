<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsVideos extends Model
{
  protected $table = 'tags_videos';
  protected $fillable = [ 'tag_id','video_id'];
}
