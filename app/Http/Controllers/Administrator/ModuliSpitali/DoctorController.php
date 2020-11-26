<?php

namespace App\Http\Controllers\Administrator\ModuliSpitali;

use App\Departs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doctor;
use App\DoctorWrokExperience;
use App\EducationDoctor;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\DoctorStoreRequest;
use Intervention\Image\ImageServiceProvider;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alldoctor(Request $request)
    {
        $doctors = Doctor::orderBy('fullname', 'ASC')->paginate(12);
        $count = Doctor::all()->count();
        if ($request->has('q')) {
            $doctors = Doctor::where('fullname', 'LIKE', '%' . $request->get('q') . '%')->paginate(5);
            if (count($doctors) == 0) {
                return redirect()
                    ->back()
                    ->with('q', $request->get('q'));
            }
        }

        return view('admin.mspitali.doctor.indexdoc', [
            'doctors' => $doctors,
            'count' => $count,
        ]);
    }

    public function addFormular()
    {
        $depart = Departs::all();
        return view('admin.mspitali.doctor.add-doctor', compact('depart'));
    }

    public function addDoctor(DoctorStoreRequest $request)
    {
        $validated = $request->validated();

        if ($request->input('email') && $request->input('password')) {
            $user = User::create([
                'name' => $request->fullname,
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            if ($user) {
                $user->roles()->attach(2);
            }

            $doctor = new Doctor();
            $doctor->fullname = $request->fullname;
            $doctor->birthday = $request->birthday;
            $doctor->depart_id = $request->depart;
            $doctor->phone = $request->phone;
            $doctor->biography = $request->biography;
            $doctor->country = $request->country;
            $doctor->status = $request->status;
            $doctor->city = $request->city;
            $doctor->gender = $request->gender;
            $doctor->user_id = $user->id;
            $doctor->phNo = $request->phNo;
            $doctor->start_job = Carbon::now();
            $doctor->save();

        } else {
            $doctor = new Doctor();
            $doctor->fullname = $request->fullname;
            $doctor->birthday = $request->birthday;
            $doctor->depart_id = $request->depart;
            $doctor->phone = $request->phone;
            $doctor->biography = $request->biography;
            $doctor->country = $request->country;
            $doctor->status = $request->status;
            $doctor->city = $request->city;
            $doctor->gender = $request->gender;
            $doctor->phNo = $request->phNo;
            $doctor->start_job = Carbon::now();
            $doctor->save();
        }

        return redirect()->route('Spitali.alldoctor');
    }

    public function profiledoctor(Request $request)
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('administrator')) {
                $id = $request->id;
                $profile = Doctor::where('id', $id)->get();
                $caunt = Doctor::count();

                return view('admin.mspitali.doctor.profile', compact('profile', 'caunt'));
            }
        } else {
            return redirect('login');
        }
    }

    public function edit($doctorId)
    {
        $doctor = Doctor::find($doctorId);
        return view('admin.mspitali.doctor.edit', [
            'doctor' => $doctor,
        ]);
    }

    public function store(Request $request, $doctorId)
    {
        return $request;
    }

    public function addDoctorEducation(Request $request, $doctorId)
    {
        $education = new EducationDoctor();
        $education->education = $request->university;
        $education->degree = $request->degree;
        $education->start_date = $request->start_data;
        $education->graduation = $request->gradtion;
        $education->end_date = $request->end_data;
        $education->doctor_id = $doctorId;
        $education->save();

        if ($education) {
            return back();
        }
    }
    public function addWorkDoctor(Request $request, $doctorID)
    {
        $work = new DoctorWrokExperience();
        $work->user_id = $doctorID;
        $work->company = $request->company;
        $work->position = $request->position;
        $work->state = $request->location;
        $work->date_from = $request->date_from;
        $work->date_to = $request->date_to;
        $work->save();
    }

    public function deleteDoctor($doctorId)
    {
        $userId = Doctor::where('id', $doctorId)->pluck('user_id');
        $doctor = Doctor::where('id', $doctorId)->delete();
        if ($doctor) {
            $user = User::where('id', $userId)->delete();
        }
        if ($doctor) {
            $education = EducationDoctor::where('doctor_id', $doctorId)->delete();
        }
        return true;
    }

    public function deleteWorkDoctor($workID)
    {
        $work = DoctorWrokExperience::where('id', $workID)->delete();
        if ($work) {
            return true;
        }
    }
    public function deleteEducationDoctor($educationID)
    {
        $work = EducationDoctor::where('id', $workID)->delete();
        if ($work) {
            return true;
        }
    }
}
