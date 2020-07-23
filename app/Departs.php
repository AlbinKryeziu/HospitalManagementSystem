<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departs extends Model
{
    protected $fillable = [
        'name', 'details', 
    ];


    public function doctors(){

        return $this->hasMany('App\Doctor');
    }
}
