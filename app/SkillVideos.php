<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillVideos extends Model
{
    protected $table = 'videos_skills';
    protected $fillable = [ 'skill_id','video_id'];
}
