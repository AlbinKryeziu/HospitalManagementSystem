<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $fillable = [
        'fullname', 'country',  'phone',  'phNo', 
        'start_job',  'image',  'user_id', 'depart_id',
        'gender','biography','status','city','birthday',
        
    ];

    public function depart(){

        return $this->belongsTo('App\Departs');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function education(){

        return $this->hasMany('App\EducationDoctor','doctor_id','id');
    }

}
