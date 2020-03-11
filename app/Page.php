<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
      'name',
      'page_des',
      'meta_des',
      'meta_keywords',
    ];
}
