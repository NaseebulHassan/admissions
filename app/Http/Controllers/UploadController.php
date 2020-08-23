<?php

namespace App\Http\Controllers;

use App\Upload;
use App\User;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('OnlineApply.uploaddoc',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student_id = $request->student_id;
        $student_cnic = $request->file('student_cnic');
        $matric_degree = $request->file('matric_degree');
        $student_photo = $request->file('student_photo');
        $inter_degree = $request->file('inter_degree');
       /* $bachelor_degree = $request->file('bachelor_degree');
        $master_degree = $request->file('master_degree');
        $equivalence_degree = $request->file('equivalence_degree');
        $nts_score_sheet = $request->file('nts_score_sheet');*/
        $student_cnic_img= rand() . '.' . $student_cnic->getClientOriginalExtension();
        $matric_degree_img = rand() . '.' . $matric_degree->getClientOriginalExtension();
        $student_photo_img = rand() . '.' . $student_photo->getClientOriginalExtension();
        $inter_degree_img= rand() . '.' . $inter_degree->getClientOriginalExtension();
       /* $bachelor_degree_img= rand() . '.' . $bachelor_degree->getClientOriginalExtension();
        $master_degree_img = rand() . '.' . $master_degree->getClientOriginalExtension();
        $equivalence_degree_img = rand() . '.' . $equivalence_degree->getClientOriginalExtension();
        $nts_score_sheet_img= rand() . '.' . $nts_score_sheet->getClientOriginalExtension();*/
        $student_cnic->move(public_path('uploads'), $student_cnic_img);
        $matric_degree->move(public_path('uploads'), $matric_degree_img);
        $student_photo->move(public_path('uploads'), $student_photo_img);
        $inter_degree->move(public_path('uploads'), $inter_degree_img);

        //// Opltionals
       /* $bachelor_degree->move(public_path('uploads'), $bachelor_degree_img);
        $master_degree->move(public_path('uploads'), $master_degree_img);
        $equivalence_degree->move(public_path('uploads'), $equivalence_degree_img);
        $nts_score_sheet->move(public_path('uploads'), $nts_score_sheet_img);*/


        $form_data = array(
            'student_id'       =>   $student_id,
            'student_cnic'       =>    $student_cnic_img,
            'student_photo'       =>   $student_photo_img,
            'matric_degree'        =>  $matric_degree_img ,
            'inter_degree'            =>   $inter_degree_img,
            /*'bachelor_degree'          => $bachelor_degree_img,
            'master_degree'          => $master_degree_img,
            'equivalence_degree'          => $equivalence_degree_img,
            'nts_score_sheet'          => $nts_score_sheet_img,*/
        );

        Upload::create($form_data);
      //  dd($form_data);
      return view('OnlineApply.viewdata')->with('message', 'submitted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit(r $r)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, r $r)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy(r $r)
    {
        //
    }
}
