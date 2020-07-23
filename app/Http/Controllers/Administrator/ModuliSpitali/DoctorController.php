<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
    public function alldoctor(){
     
          $doctor=Doctor::all();
        return view('admin.mspitali.doctor.indexdoc',compact('doctor'));
      


    }
}
