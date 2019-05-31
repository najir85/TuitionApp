<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\userinfo;

class UserController extends Controller
{
    public function showUser(){
    	$userinfos=userinfo::all();
    	return view('showUser',compact('userinfos'));
    }

    public function saveUser(){
    	$user=new userinfo();
    	$user->id=request('id');
    	$user->name=request('name');
    	$user->contact=request('contact');
    	$user->institute=request('institute');

    	$user->save();
    	return redirect('/showuserinfo');
    	

    }

    public function createUser(){
    	return view('createuser');
    }

}
