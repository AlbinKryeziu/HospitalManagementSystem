<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationDoctor extends Model
{
    protected $table = 'education_doctors';

    public function doctor()
    {
        return $this->belongsTo('App\Doctor');
       
   }
}
