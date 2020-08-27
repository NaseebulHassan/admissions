<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student_Programs;
class Semester extends Model
{

    function StudentBasicinfo(){

        return $this->hasMany('App\Student_Programs', 'semester', 'session');
        
    }

    protected $fillable = [
        'session',
    ];
}
