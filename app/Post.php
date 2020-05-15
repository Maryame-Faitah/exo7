<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }

    public function tag(){
        return $this->belongsTo('App\Tags');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

}
