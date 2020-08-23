<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Student_Programs;
use App\Student_Basicinfo;

class User extends Authenticatable
{
    use Notifiable;
 
  
    function StudentBasicinfo(){

        return $this->hasMany('App\Student_Basicinfo', 'student_id');
        
    }

    function studentprogram(){

        return $this->hasMany('App\Student_Programs', 'student_id' );
    }
   
    function studentacademic(){

        return $this->hasMany('App\Student_Academic','student_id');
    }
    function uploaddoc(){

        return $this->hasMany('App\Upload','student_id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
