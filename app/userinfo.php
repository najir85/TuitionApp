<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    //
    public $timestamps = false;

    protected $fillable = [
    'name',
    'contact',
    'institute'
	];
}
