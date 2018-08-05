<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use App\User;
use App\Profile;
use Auth;


class UserController extends Controller
{
    public function user(){
        $user = Profile::all();
        return view('profile.user', ['profile' => $user]);
    }

    public function show($id)
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile')->with('profile', $profile);
    }

    public function profile(){
        return view('profile', array('user' => Auth::user()) );

    }


}