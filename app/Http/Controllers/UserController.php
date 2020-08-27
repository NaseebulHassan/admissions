<?php

namespace App\Http\Controllers;

use App\Student_Academic;
use App\Student_Programs;
use App\Student_Basicinfo;
use Illuminate\Http\Request;
use App\User;
use App\Voucher;

class UserController extends Controller
{
    //
    public function login(){

        return view('login');
    }


    public function Voucher(){

        $voucher = new Voucher();
    
        // $voucher->formno = $request['formno'];
        // $basic_info->save();

   
      $basicinfos=Student_Basicinfo::where('formno','=',$formno)->first();
        $programs=Student_Programs::where('formno','=',$formno)->first();
        $academics=Student_Academic::where('formno','=',$formno)->first();  
         return view('feevoucher', compact('basicinfos', 'programs', 'academics'));
    


}
}
