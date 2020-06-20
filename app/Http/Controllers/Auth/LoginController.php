<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::ADMIN;

    // if (Auth::check()) {

    //     $user = Auth::user()->type;

    //     if ($user == 'Admin') {
    //         return $this->redirectTo =  '/admin';
    //     }elseif($user == 'Manager') {
    //         return $this->redirectTo =  '/manager';
    //     }elseif($user == 'Employee') {
    //         return $this->redirectTo =  '/employee';
    //     }else{
    //         return $this->redirectTo =  '/nothing';
    //     };
    // };


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
