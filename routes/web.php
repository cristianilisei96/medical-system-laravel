<?php

use App\User;
use App\Specialization;
use App\Doctor;
use App\Sheet;

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
	$sheets = Sheet::whereDate('created_at',  Carbon::today()->toDateString())->get();;

    return view('welcome', compact('sheets'));
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::resource('users', 'UserController');

Route::resource('patients', 'PatientController');

Route::resource('doctors', 'DoctorController');

Route::resource('specializations', 'SpecializationController');

Route::resource('sheets', 'SheetController');

Route::get('/search', 'PatientController@search');

Route::get('/test', 'TestController@index');


