<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getAllProfile(){
        $profile = Profile::all();
        return view('profiles', ['profiles' => $profile]);
    }
    public function show ($id){ 
        $profile = Profile::find($id);

        if(!$profile){
            return abort(404);
        }
        return view('show', compact('profile'));
    }
}
