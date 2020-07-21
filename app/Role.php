<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;

    public function users(){
        return $this->belongsToMany('App\User');
    }
    
}
