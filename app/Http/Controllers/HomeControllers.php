<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllers extends Controller
{
    //
    public function login(){
        return view('existinguser.login');
    }
    public function applicationform(){
        return view('OnlineApply.online');
    }
    public function uploads(){
        return view('OnlineApply.upload');
    }
}
