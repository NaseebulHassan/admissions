<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student_Programs;
class Semester extends Model
{

    function semesters(){

        return $this->hasMany('App\Student_Programs','id');
        
    }
  

    protected $fillable = [
        'session',
    ];
}
