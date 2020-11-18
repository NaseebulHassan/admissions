<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student_Programs;
use App\Semester;
class Program extends Model
{
    public function studentprogram(){
        return $this->hasMany('\App\Student_Programs','id');
    
    }
    public function allstudent(){
        return $this->hasMany('\App\Student_Programs','id');
    
    }
   
    protected $fillable = [
        'code', 'name', 'process_fee','payable_date',
    ];
}
