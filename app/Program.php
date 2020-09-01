<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student_Programs;
class Program extends Model
{
    public function studentprogram()
    {
        return $this->belongsTo('\App\Student_Programs','program1');
       
    }
    protected $fillable = [
        'code', 'name', 'process_fee','payable_date',
    ];
}
