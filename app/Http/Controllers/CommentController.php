<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use App\User;

class CommentController extends Controller
{


	public function __construct()
    {
        $this->middleware('auth');

       
    }

    public function store(Post $post){
   
    	Comment::validate([
    		'body'=>'required'->min('8');

    	])
 

    	Comment::create([

    		'post_id'=>$post->id,
    		'user_id'=>auth()->user()->id,
    		'body'=>request('body')

    	]);
    	return back();

    }

}
