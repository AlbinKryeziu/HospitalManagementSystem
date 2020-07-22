<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\User as AuthUser;

class AdminUserController extends Controller
{

    public function welcome(){
        $user=2;
        return view('welcome',compact('user'));
}
     public function index(){

        return view('admin.index');
    }

    public function cms()
    {
      
    
    
     if (Auth::check()){
        return view('admin.cms');
           }
     
    

        return redirect('login');
    
}
    
}
