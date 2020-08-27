<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Student_Academic extends Model
{
    //

   
    public function academics(){
        return $this->belongsTo('\App\Student_Basicinfo','formno');
    }
    public function program1(){
        return $this->belongsTo('\App\User','id');
    }
    protected $fillable=[
        'formno','qualification','board_university','year','division','grade','obtain_marks','total_marks'
    ];
}
