<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminProfile extends Controller
{
    public function index () {
        // $user = User::findOrFail(Auth::id());
        // dd($user);

        return view('admin.profile.profile');
        // return view('admin.profile.profile', compact('user'));
    }


}
