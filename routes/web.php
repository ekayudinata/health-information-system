<?php

use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\UserController;
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
    return view('login');
});

Route::get('/dashboard',function (){
    return view('dashboard.layouts.main', [
        'title' => "dashboard"
    ]); 
}); 

Route::resource('/dashboard/patient', PatientController::class); 

Route::resource('/dashboard/useraccount', UserController::class);
Route::resource('/dashboard/jabatankaryawan', EmployeePositionController::class); 
