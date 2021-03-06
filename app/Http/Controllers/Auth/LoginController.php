<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function redirectTo()
    {

        if (Auth::user()->hasRole('administrator'))
        {
         $this->redirectTo = route('Administrator.cms');
            return $this->redirectTo;
        }
        if (Auth::user()->hasRole('user'))
        {
         $this->redirectTo = route('Administrator.index');
            return $this->redirectTo;
        }
        if (Auth::user()->hasRole('author'))
        {
         $this->redirectTo = route('Administrator.index');
            return $this->redirectTo;
        }
    }
   
}
