<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pacient;

class PacientController extends Controller
{
    public function getPacient()
    {
        $pacient = Pacient::paginate(20);

        if (request()->has('q')) {
            $pacient = Pacient::where('fullname', 'LIKE', '%' . request()->get('q') . '%')->get();
        }
        return view('admin.mspitali.Pacient.pacient', compact('pacient'));
    }
}
