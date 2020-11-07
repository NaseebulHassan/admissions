<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Student_Basicinfo;
use App\Student_Programs;
use App\Student_Academic;
use App\Program;
use App\Voucher;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'checkSteps']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $baseInfo = Student_Basicinfo::where('formno', Auth::user()->id)->first();
        if ($baseInfo) {
            return redirect()->route('st_program');
        } else 
        return view('home');
    } 



    public function getdata()
    {
  
      $users=User::join('Student__Basicinfos','Student__Basicinfos.formno','=','users.id')
       ->join('Student__Programs','Student__Programs.formno','=','users.id')
       ->join('programs','Student__Programs.program1','=','programs.id')
      ->orderBy('Student__Basicinfos.formno','DESC')
       ->paginate(2);
        return view('alldata',compact('users'));
    } 
 

    public function allviewdata(Request $request, $student_id){
          
        
       
        $basicinfos=Student_Basicinfo::where('formno','=',$student_id)->first();
        $programs=Student_Programs::where('formno','=',$student_id)->first();;
        $academics=Student_Academic::where('formno','=',$student_id)->get();;
         return view('viewstudata',compact('basicinfos','programs','academics'));
      
       
    }
}
