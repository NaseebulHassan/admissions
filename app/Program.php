<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student_Programs;
class Program extends Model
{
    public function programs()
    {
        return $this->hasMany('\App\Student_Programs', 'program1', 'code');
    }
    protected $fillable = [
        'code', 'name', 'process_fee','payable_date',
    ];
}
