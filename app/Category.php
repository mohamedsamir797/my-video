<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name',
      'meta_keywords',
      'meta_des',
    ];
    public function video(){
      return $this->hasmany(Video::class);
    }
}
