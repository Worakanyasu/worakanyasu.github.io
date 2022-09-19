<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function saveProfile(Request $req) {

        $profile = new Profile;
        $profile->firstname = $req->firstname;
        $profile->lastname = $req->lastname;
        $profile->email = $req->email;
        $profile->mobile = $req->mobile;
        $profile->save();

        return view('postProfile');
    }
}