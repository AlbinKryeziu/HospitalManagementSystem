<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Departs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageServiceProvider;


class DoctorController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alldoctor()
    {
        $doctor = Doctor::all();
        $count=Doctor::all()->count();
      
        return view('admin.mspitali.doctor.indexdoc', compact('doctor','count'));
    }



    public function addformular()
    {
        $depart = Departs::all();
        return view('admin.mspitali.doctor.add-doctor', compact('depart'));
    }



    public function Adddoctor(Request $request)
    {
      
        $request-> validate([
            'fullname'=>'required','min:4',
            'birthday'=>'required',
            'depart'=>'required',
            'phNo'=>'required',
            'phone' =>'required',
            'biography'=>'required',
            'country'=>'required',
            'status'=>'required',
            'city'=>'required',
            'gender'=>'required',
          
            ]);

            if ($request->input('email') && $request->input('password')){
               $user=User::create([
                   'name'=>$request->fullname,
                   'email'=>$request->input('email'),
                   'password'=>Hash::make($request->input('password')),
               ]);

               if($user){

                $user->roles()->attach(2);
               }
              
          

              Doctor::create([
                'fullname'=>$request->fullname,
                'birthday'=>$request->birthday,
                'depart_id'=>$request->depart,
                'phone'=>$request->phone,
                'biography'=>$request->biography,
                'country'=>$request->country,
                'status'=>$request->status,
                'city'=>$request->city,
                'gender'=>$request->gender,
                'user_id'=>$user->id,
                'phNo'=>$request->phNo,
                'start_job'=>Carbon::now(),
             ]);

            }
            else{
             Doctor::create([
                'fullname'=>$request->fullname,
                'birthday'=>$request->birthday,
                'depart_id'=>$request->depart,
                'phone'=>$request->phone,
                'biography'=>$request->biography,
                'country'=>$request->country,
                'status'=>$request->status,
                'city'=>$request->city,
                'gender'=>$request->gender,
                 'phNo'=>$request->phNo,
                'start_job'=>Carbon::now(),
                ]);

            }  
            
            return redirect()->route('Spitali.alldoctor');

    }

    public function profiledoctor(Request $request){
    if(Auth::check()){
        if (Auth::user()->hasRole('administrator')){
            $id=$request->id;
             $profile=Doctor::where('id', $id)->get();
            $caunt=Doctor::count();
      
         return view('admin.mspitali.doctor.profile',compact('profile','caunt'));
        }
    }
        
        else {
            return redirect('login');
        }

    }
}
