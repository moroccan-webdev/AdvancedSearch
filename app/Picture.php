<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  protected $fillable = ['name'];

  public function tags()
  {
      return $this->belongsToMany('App\Tag');
  }

  public function category()
  {
      return $this->belongsTo('App\Category');
  }
}
