<?php

namespace App;

use App\User;
Use App\Post;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    
	public function post(){

		return $this->belongsTo('App\Post');
	}

	public function user(){

		return $this->belongsTo('App\User');
	}


	protected $fillable=[

		'user_id',
		'post_id',
		'body'
	] ;

}
