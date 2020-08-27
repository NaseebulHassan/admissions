<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Student_Programs;
use App\Student_Basicinfo;
use App\User;
use App\Semester;
use App\Program;
use DataTables;

class ProgramsController extends Controller
{
    //
    public function StudentProgram(){


        $users=User::all();
        $semesters=Semester::whereRaw('id = (select max(`id`) from semesters)')->get();
        $programs=Program::all();
        return view('OnlineApply.studentprogram',compact('users','semesters','programs'));
    }

    public function storeprogram(Request $request){
       // dd($request);
        $this->validate($request, [
            'student_id' => 'required',
            'student_status'=> 'required',
            'semester'=> 'required',
            'program1'=> 'required'

        ]);
            $studentprograms= new Student_Programs;
            
            $studentprograms->formno = $request['student_id'];
            $studentprograms->campus= $request['campus'];
            $studentprograms->registration_no = $request['registration_no'];
            $studentprograms->pre_program = $request['pre_program'];
            $studentprograms->reason_leaving = $request['reason_leaving'];
            $studentprograms->institution_attended = $request['institution_attended'];
            $studentprograms->cgpa = $request['cgpa'];
            $studentprograms->credit_hours = $request['credit_hours'];
            $studentprograms->program = $request['program'];
            $studentprograms->tr_reason_leaving = $request['tr_reason_leaving'];
            $studentprograms->awaiting_result = $request['awaiting_result'];
            $studentprograms->board_university = $request['board_university'];
            $studentprograms->roll_number = $request['roll_number'];
            $studentprograms->year = $request['year'];
            $studentprograms->disciplinary_issue = $request['disciplinary_issue'];
            $studentprograms->disciplinary_details = $request['disciplinary_details'];
            $studentprograms->how_did_come = $request['how_did_come'];
            $studentprograms->student_status = $request['student_status'];
            $studentprograms->semester = $request['semester'];
            $studentprograms->program1 = $request['program1'];
            $studentprograms->program2 = $request['program2'];
            $studentprograms->program3 = $request['program3'];
          
            $studentprograms->save();
            return redirect()->route('st_academics');
           
     

    
      
           
      
    
    }
    

}
