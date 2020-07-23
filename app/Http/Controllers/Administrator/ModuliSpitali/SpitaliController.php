<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Departs;
use App\Doctor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SpitaliController extends Controller
{
   public function index(){

       
     
   
   
    
         return view('admin.adminpanel.dashboard');
}



}
