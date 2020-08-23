<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Student_Programs;
class Student_Basicinfo extends Model
{
    //
    public function program1(){
        return $this->belongsTo('\App\User','id');
    }
    public function programs(){
        return $this->hasMany('\App\Student_Programs','student_id');
    }
    public function academics(){
        return $this->hasMany('\App\Student_Academic','student_id');
    }

    protected $fillable = [
        'student_id',
        'student_name',
        'student_cnic',
        'father_name',
        'father_cnic',
        'guardian_name',
        'guardian_cnic',
        'gender',
        'martial_status',
        'domicile_province',
        'domicile_district',
        'date_of_birth',
        'place_of_birth',
        'nationality1',
        'present_address',
        'present_tel',
        'present_mobile',
        'permanent_address',
        'perm_tel',
        'perm_mobile',
        'student_email',
     
];
}