<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OnlineApplicant extends Model
{
    //

    protected $fillable = [
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
            'student_email',
            'father_occupation',
            'fbusiness_address',
            'father_tel',
            'father_mobile',
            'username',
            'password',
    ];
}
