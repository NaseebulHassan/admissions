<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Student_Programs;
use App\User;
use DataTables;

class ProgramsController extends Controller
{
    //
    public function StudentProgram(){


        $users=User::all();
      // dd($basicinfo);
        return view('OnlineApply.studentprogram',compact('users'));
    }

    public function storeprogram(Request $request){
       // dd($request);
        $this->validate($request, [
            'student_id' => 'required',
            'student_status'=> 'required',
            'program1'=> 'required'

        ]);
            $studentprograms= new Student_Programs;
            
            $studentprograms->student_id = $request['student_id'];
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
            $studentprograms->program1 = $request['program1'];
            $studentprograms->program2 = $request['program2'];
            $studentprograms->program3 = $request['program3'];
          
            $studentprograms->save();

            return view('OnlineApply.academic');
      /*  $create=Student_Programs::create([
            'student_id'=> $request->student_id,
            'campus'=> $request->campus,
            'registration_no'=> $request->registration_no,
            'pre_program'=> $request->pre_program,
            'reason_leaving'=> $request->reason_leaving,
            'institution_attended'=> $request->institution_attended,
            'cgpa'=> $request->cgpa,
            'credit_hours'=> $request->credit_hours,
            'program'=> $request->program,
            'tr_reason_leaving'=> $request->tr_reason_leaving,
            'awaiting_result'=> $request->awaiting_result,
            'board_university'=> $request->board_university,
            'roll_number'=> $request->roll_number,
            'year'=> $request->year,
            'disciplinary_issue'=> $request->disciplinary_issue,
            'disciplinary_details'=> $request->disciplinary_details,
            'how_did_come'=> $request->how_did_come,
            'student_status'=> $request->student_status,
            'program1'=> $request->program1,
            'program2'=> $request->program2,
            'program3'=> $request->program3

        ]);*/

    
      
           
      
    
    }
    

}
