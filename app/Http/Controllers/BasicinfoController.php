<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Student_Basicinfo;
use App\User;
use DataTables;

class BasicinfoController extends Controller
{
    //
    public function Basicinfo(){
       $students=User::all();
        return view('home',compact('students','basicinfo'));
    }

    public function StoreBasicinfo(Request $request){
    
        $validate = Validator::make($request->all(), [
            'student_id' => 'required',
           'student_name' => 'required',
           'student_cnic' => 'required',
           'father_name' => 'required',
           'father_cnic' => 'required',
           'guardian_name' => 'required',
           'guardian_cnic' => 'required',
           'gender' => 'required',
           'martial_status' => 'required',
           'domicile_province' => 'required',
           'domicile_district' => 'required',
           'date_of_birth' => 'required',
           'place_of_birth' => 'required',
           'nationality1' => 'required',
           'present_address' => 'required',
           'present_tel' => 'required',
           'present_mobile' => 'required',
           'student_email' => 'required|email',
           'permanent_address'=> 'required',
           ]);    
        // $this->validate($request, );
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            $basic_info = new Student_Basicinfo;
      
            $basic_info->formno = $request['student_id'];
            $basic_info->student_name = $request['student_name'];
            $basic_info->student_cnic = $request['student_cnic'];
            $basic_info->father_name = $request['father_name'];
            $basic_info->father_cnic = $request['father_cnic'];
            $basic_info->guardian_name = $request['guardian_name'];
            $basic_info->guardian_cnic = $request['guardian_cnic'];
            $basic_info->gender = $request['gender'];
            $basic_info->martial_status = $request['martial_status'];
            $basic_info->domicile_province = $request['domicile_province'];
            $basic_info->domicile_district = $request['domicile_district'];
            $basic_info->date_of_birth = $request['date_of_birth'];
            $basic_info->place_of_birth = $request['place_of_birth'];
            $basic_info->nationality1 = $request['nationality1'];
            $basic_info->nationality2 = $request['nationality2'];
            $basic_info->present_address = $request['present_address'];
            $basic_info->present_tel = $request['present_tel'];
            $basic_info->present_mobile = $request['present_mobile'];
            $basic_info->permanent_address = $request['permanent_address'];
            $basic_info->student_email = $request['student_email'];
            $basic_info->father_occupation = $request['father_occupation'];
            $basic_info->fbusiness_address = $request['fbusiness_address'];
            $basic_info->father_tel = $request['father_tel'];
            $basic_info->father_mobile = $request['father_mobile'];
            $basic_info->applicant_designation = $request['applicant_designation'];
            $basic_info->disability = $request['disability'];
            $basic_info->special_arrangement = $request['special_arrangement'];
            $basic_info->emergency_name = $request['emergency_name'];
            $basic_info->relation_applicant = $request['relation_applicant'];
            $basic_info->em_telephone = $request['em_telephone'];
            $basic_info->em_mobile = $request['em_mobile'];
            $basic_info->em_address = $request['em_address'];
         
            $basic_info->save();
            return redirect()->route('st_program');
        }
            

            
           
           // dd($create);
          //  $saverecord=$create->save();
          //   if($saverecord){
          //       return view('OnlineApply.studentprogram')->with('message', 'submitted successfully');
          //   }
          // else{
          //       return ("Someting went wrong Please try again");
          // }
    }

}
