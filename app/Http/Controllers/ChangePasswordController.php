<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use Session;
class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        $email = $request->input('email');
        $new_password =Hash::make($request->input('new_password'));
      $query=DB::update('update users set password = ? where email = ?',[$new_password,$email]);
      if($query)
      {
        return view('auth.login')->with('message', 'updated successfully');
        //('auth.login')->with('message', 'updated successfully');
      }else{
        return view('auth.login')->with('message', 'not update successfully');
      }
    }
}
