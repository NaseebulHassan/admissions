<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

/*------Login page route-----*/
Route::get('users', 'HomeControllers@login');


/*------Online Application  route-----*/

Route::get('OnlineAdmission', 'HomeControllers@applicationform');

Route::get('uploads', 'HomeControllers@uploads');