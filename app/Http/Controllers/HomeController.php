<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Student_Basicinfo;
use App\Student_Programs;
use App\Student_Academic;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    } 

    public function startApply($id){

        if($id){
           
            $basicinfos=Student_Basicinfo::where('student_id','=',$id)->first();
            $programs=Student_Programs::where('student_id','=',$id)->first();
            $academics=Student_Academic::where('student_id','=',$id)->first();
            return view('OnlineApply.viewdata');
        }
        elseif($id){
            $basicinfos=Student_Basicinfo::whereNull('student_id','=',$id);
            $programs=Student_Programs::whereNull('student_id','=',$id);
            $academics=Student_Academic::whereNull('student_id','=',$id);
            return view('home1');
        }
        elseif($id){
            $basicinfos=Student_Basicinfo::where('student_id','=',$id)->first();
            $programs=Student_Programs::whereNull('student_id','=',$id);
            $academics=Student_Academic::whereNull('student_id','=',$id);
            return view('OnlineApply.studentprogram');
        }
        elseif($id){
            $basicinfos=Student_Basicinfo::where('student_id','=',$id)->first();
            $programs=Student_Programs::where('student_id','=',$id)->first();
            $academics=Student_Academic::whereNull('student_id','=',$id);
            return view('OnlineApply.academic');
        }
        else{
            return view('OnlineApply.viewdata');
        }

    }


    public function getdata()
    {
  
       $users=User::join('Student__Basicinfos','Student__Basicinfos.student_id','=','users.id')
       ->join('Student__Programs','Student__Programs.student_id','=','users.id')
      ->orderBy('Student__Basicinfos.student_id','DESC')
       ->paginate(2);
        return view('alldata',compact('users'));
    } 
 

    public function allviewdata(Request $request, $student_id){
          
        
       
        $basicinfos=Student_Basicinfo::where('student_id','=',$student_id)->first();
        $programs=Student_Programs::where('student_id','=',$student_id)->first();;
        $academics=Student_Academic::where('student_id','=',$student_id)->get();;
         return view('viewstudata',compact('basicinfos','programs','academics'));
      
       
    }
}
