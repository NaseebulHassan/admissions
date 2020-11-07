<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Student_Programs;
use App\Student_Basicinfo;
use App\Student_Academic;
class Student_Basicinfo extends Model
{
    //
    public function program1()
    {
        return $this->belongsTo('\App\User', 'id');
    }
    public function programs()
    {
        return $this->hasMany('\App\Student_Programs', 'formno', 'formno');
    }
    public function academics()
    {
        return $this->hasMany('\App\Student_Academic', 'formno', 'formno');
    }

    protected $fillable = [
        'formno',
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
        'student_email',

    ];

}
