<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Post extends Eloquent
{
    //

    
     protected $fillable = [
    'institute',
    'class',
    'subject',
    'payment',
    'days',
    'address',
    'contact',
    'joiningdate'

	];

    public function comment(){
       return $this->hasMany('App\Comment');
    }

     public function user(){
       return $this->belongsTo('App\User');
    }
    


}
