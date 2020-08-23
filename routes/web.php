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
    return view('welcome');
});

/*------Login page route-----*/

Route::get('userlogin','UserController@login')->name('userlogin');

/*------Online Application  route-----*/


Route::post('/studentinfo', 'BasicinfoController@StoreBasicinfo')->name('studentinfo');

Route::get('Student_program', 'ProgramsController@StudentProgram');
Route::post('storeprogram', 'ProgramsController@storeprogram')->name('storeprogram');

Route::get('Student_academics', 'AcademicController@StudentAcademic');

Route::post('/formsubmitted', 'AcademicController@StoreRecord')->name('formsubmitted');
 
/* -----------Uploads Document---------*/
Route::get('upload', 'UploadController@index')->name('upload');
Route::post('/uploaded', 'UploadController@store')->name('uploaded');
Auth::routes();
Route::get('iuic_sic_getdata01', 'HomeController@getdata')->name('getdata');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/startapply/{id}', 'HomeController@index')->name('startapply');

Route::get('/allviewdata/{student_id}', 'HomeController@allviewdata')->name('allviewdata');



Route::get('/viewrecord/', 'ViewDataController@index')->name('viewrecord');
Route::get('change-pass', 'ChangePasswordController@index')->name('change.pass');
Route::post('/change_password', 'ChangePasswordController@store')->name('change_password');