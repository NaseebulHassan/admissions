<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_Academic;
use App\User;


class AcademicController extends Controller
{
    //
    public function StudentAcademic(){
        $users=User::all();
        return view('OnlineApply.academic',compact('users'));
    }
    public function Complete(){
        return view('OnlineApply.viewdata');
    }
    public function StoreRecord(Request $request)
    {

           

        $student=$request->row[0]['student_id'];
        $rows =$request->input('row');
        foreach($rows as $row)
        {
              if(!empty($row['qualification']))
              {
                $records []=array(
                    'student_id'=>$student,
                    'qualification'=>$row['qualification'],
                    'board_university'=>$row['board_university'],
                    'year'=>$row['year'],
                    'division'=>$row['division'],
                    'grade'=>$row['grade'],
                    'obtain_marks'=>$row['obtain_marks'],
                    'total_marks'=>$row['total_marks'],
                );
              };
               /// dd($records);
      
        }
        Student_Academic::insert($records);
          
            
        return view('OnlineApply.viewdata')->with('message', 'submitted successfully');
    
    }
}
