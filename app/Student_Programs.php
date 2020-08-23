<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student_Basicinfo;
class Student_Programs extends Model
{
    //

    public function program(){
        return $this->belongsTo('\App\Student_Basicinfo','student_id');
    }
    public function program1(){
        return $this->belongsTo('\App\User','id');
    }
   
    protected $fillable = [
       'student_id', 'student_status', 'program1',
    ];

 
}
