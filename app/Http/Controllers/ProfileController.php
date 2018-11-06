<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function show($id){
    	return view('profile.index');
    }

    public function showProfile(){
    	$user = \Auth::user();
    	return view('profile.userprofile')->with('user', $user);
    }
}
