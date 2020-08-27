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

        return $this->hasMany('App\Student_Basicinfo', 'formno', 'id');
        
    }

    public function programs()
    {
        return $this->hasMany('\App\Student_Programs', 'formno', 'id');
    }
    public function academics()
    {
        return $this->hasMany('\App\Student_Academic', 'formno', 'id');
    }
    public function vouchers()
    {
        return $this->hasMany('\App\Voucher', 'formno', 'id');
    }
    function uploaddoc(){

        return $this->hasMany('App\Upload','formno');
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
