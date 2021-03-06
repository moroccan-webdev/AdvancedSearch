<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function pictures()
    {
        return $this->belongsToMany('App\Picture');
    }
}
