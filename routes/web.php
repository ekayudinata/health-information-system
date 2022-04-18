<?php

use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmployeeController;
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
    return view('dashboard.index', [
        'title' => "Dashboard"
    ]); 
}); 

Route::resource('/dashboard/patients', PatientController::class); 

Route::resource('/dashboard/useraccount', UserController::class);
Route::resource('/dashboard/employeepostion', EmployeePositionController::class); 

Route::resource('/dashboard/employee',EmployeeController::class);


// Route::get('/dashboard/useraccount',function (){
//     return view('dashboard.useraccount.index', [
//         'title' => "dashboard"
//     ]); 
// });

// Route::get('/dashboard/useraccount/edit',function (){
//     return view('dashboard.useraccount.edit', [
//         'title' => "dashboard"
//     ]); 
// }); 

// Route::get('/dashboard/useraccount/create',function (){
//     return view('dashboard.useraccount.create', [
//         'title' => "dashboard"
//     ]); 
// });

// Route::get('/dashboard/employee/edit',function (){
//     return view('dashboard.employee.edit', [
//         'title' => "dashboard"
//     ]); 
// });
