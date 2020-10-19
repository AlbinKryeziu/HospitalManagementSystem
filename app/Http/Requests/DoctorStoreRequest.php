<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'fullname'=>'required','min:4',
            'email'=> 'required',
            'password'=>'required','min:8',
            'birthday'=>'required',
            'depart'=>'required',
            'phNo'=>'required',
            'phone' =>'required',
            'country'=>'required',
            'status'=>'required',
            'city'=>'required',
            'gender'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Name is required!!',
            'email.required' => 'Email is required!',
            'birthday.required' => 'Birthday is required!',
            'password.required' => 'Password is required!',
            'gender.required' => 'Gender is required!',
            'depart.required' => 'Depart is required!',
            'phNo.required' => 'Number Phno is required!',
            'phone.required' => 'Phone  is required!',
            'country.required' => 'Country Phno is required!',
            'status.required' => 'Status Phno is required!',
        ];
    }
}
