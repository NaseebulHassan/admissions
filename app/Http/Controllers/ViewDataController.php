<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Student_Programs;
use App\User;
use App\Upload;
use App\Student_Basicinfo;

class ViewDataController extends Controller
{
    //
        public function index(){
           $users= DB::table('User')
            ->join('Student_Basicinfo', 'user.id', '=', 'Student_Basicinfo.student_id')
            ->join('Student_Programs', 'user.id', '=', 'Student_Programs.student_id')
            ->join('Student_Academic', 'user.id', '=', 'Student_Academic.student_id')
            ->join('Upload', 'user.id', '=', 'Upload.student_id')
            ->select ('User.*','Student_Basicinfo.*','Student_Programs.*','Student_Academic.*','Upload.*')
            ->get();
            /*$students=Student_Basicinfo::all();
            $users=User::all(); 
            $programs=Student_Programs::all();
            $uploads=Upload::all();*/
            return view('OnlineApply.viewdata',compact('users'));
        }

}
