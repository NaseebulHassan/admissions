<?php

namespace App\Http\Controllers;

use App\Student_Academic;
use App\Student_Programs;
use App\Student_Basicinfo;
use App\Program;
use Illuminate\Http\Request;
use App\User;
use App\Voucher;
use DB;

class UserController extends Controller
{
    //
    public function login(){

        return view('login');
    }


    public function Voucher(Request $request , $id){

        $voucher = new Voucher();
    
        $voucher->formno = $request['id'];
         $voucher->save();

   
        $basicinfos=Student_Basicinfo::where('formno','=',$id)->first();
        
        $programs=Student_Programs::where('formno','=',$id)->first();
       
        $vouchers=Voucher::where('formno','=',$id)->first();
       // dd($vouchers); 
         return view('feevoucher', compact('basicinfos', 'programs', 'vouchers'));
    


}
}
