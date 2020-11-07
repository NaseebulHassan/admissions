<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    
    public function program(){
        return $this->belongsTo('\App\Voucher','formno');
    }
    

    protected $fillable = [
        'formno',
    ];
}
