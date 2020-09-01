<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student_Basicinfo;
use App\Semester;
use App\Program;
class Student_Programs extends Model
{
    //

    public function program(){
        return $this->belongsTo('\App\Student_Basicinfo','formno');
    }
    public function program1(){
        return $this->belongsTo('\App\User','id');
    }

    public function studentprogram(){
        return $this->hasMany('\App\Program','id');
       
   
    }

    public function semester(){
        
        return $this->hasMany('\App\semester','session');
    }
   
    protected $fillable = [
       'formno', 'student_status','semester','program1',
    ];

 
}
