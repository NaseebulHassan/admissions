<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Student_Programs;
use App\Student_Basicinfo;
use App\Student_Academic;

class User extends Authenticatable
{
    use Notifiable;
 
  
    function StudentBasicinfo(){

        return $this->hasMany('App\Student_Basicinfo', 'student_id', 'id');
        
    }

    public function programs()
    {
        return $this->hasMany('\App\Student_Programs', 'student_id', 'id');
    }
    public function academics()
    {
        return $this->hasMany('\App\Student_Academic', 'student_id', 'id');
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
