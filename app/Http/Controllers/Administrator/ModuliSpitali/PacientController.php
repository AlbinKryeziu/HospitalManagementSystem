<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pacient;

class PacientController extends Controller
{
    
public function getPacient(){
    $pacient=Pacient::all();
    return view('admin.mspitali.Pacient.pacient',compact('pacient'));
}

}
