<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
Use App\User;
use App\Profile;
use Auth;
use Image;


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

    public function update_avatar(Request $request){
        // Logic for user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile', ['profile' => Auth::user()] );
    }


}