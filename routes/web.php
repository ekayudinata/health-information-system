<?php

use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\LoginController;
use App\Models\Employee;
use App\Models\Patient;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard',function (){
    return view('dashboard.index', [
        'title' => "Dashboard",
        'employeeCount' => Employee::all(),
        'userCount' => User::all(),
        'patientCount' => Patient::all()
    ]); 
}); 

Route::resource('/dashboard/patients', PatientController::class); 

Route::resource('/dashboard/useraccount', UserController::class);

Route::resource('/dashboard/userrole', UserRoleController::class);

Route::resource('/dashboard/employeeposition', EmployeePositionController::class); 

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
