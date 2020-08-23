<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Student_Academic extends Model
{
    //

   
    public function academics(){
        return $this->belongsTo('\App\Student_Basicinfo','student_id');
    }
    public function program1(){
        return $this->belongsTo('\App\User','id');
    }
    protected $fillable=[
        'student_id','qualification','board_university','year','division','grade','obtain_marks','total_marks'
    ];
}
