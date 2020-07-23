<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'fullname', 'Address',  'phone',  'phNo', 
         'start_job',  'image',  'user_id', 'depart_id', 
        
    ];

    public function depart(){

        return $this->belongsTo('App\Departs');
    }

}
