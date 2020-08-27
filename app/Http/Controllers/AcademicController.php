<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student_Academic;
use App\Student_Programs;
use App\Student_Basicinfo;
use App\User;
use App\Semester;
use App\Program;



class AcademicController extends Controller
{
    //
    public function StudentAcademic(){
        $users=User::all();
        return view('OnlineApply.academic',compact('users'));
    }
    public function Complete(){
        
        $users=User::all();
        return view('OnlineApply.viewdata',compact('users'));
        
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
                    'formno'=>$student,
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
          
            
        return redirect()->route('Applied');
    
    }
}
