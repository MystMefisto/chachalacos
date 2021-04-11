<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function posts(){
        return $this->belongsTo('App\Models\Category');
    }
}
