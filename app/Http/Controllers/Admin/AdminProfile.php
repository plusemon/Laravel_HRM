<?php

namespace App\Http\Controllers\Admin;


use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminProfile extends Controller
{
    public function index () {
        $user = Auth::user();

        return view('admin.profile.profile', compact('user'));
    }


}
