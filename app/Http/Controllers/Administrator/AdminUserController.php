<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{

    public function index(){

        return view('admin.index');
    }

    public function cms(){
    
        if (Auth::check()){
        return view('admin.cms');
    }
    return redirect('login');
}
    
}
