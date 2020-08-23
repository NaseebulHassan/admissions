<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    public function UploadDoc(){
        
        return $this->belongsTo('\App\User', 'student_id');
    }
    protected $fillable= [
        'student_id','student_cnic','matric_degree','inter_degree','student_photo'
    ];
}
