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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard',function (){
    return view('dashboard.index', [
        'title' => "Dashboard",
        'employeeCount' => Employee::all(),
        'userCount' => User::all(),
        'patientCount' => Patient::all()
    ]); 
})->middleware('auth'); 

Route::resource('/dashboard/patients', PatientController::class)->middleware('superadmin'); 

Route::resource('/dashboard/useraccount', UserController::class)->middleware('auth');

Route::resource('/dashboard/userrole', UserRoleController::class)->middleware('auth');

Route::resource('/dashboard/employeeposition', EmployeePositionController::class)->middleware('auth'); 

Route::resource('/dashboard/employee',EmployeeController::class)->middleware('auth');


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

Route::get('/dashboard/service/action',function (){
    return view('dashboard.service.action.index', [
        'title' => "dashboard"
    ]); 
});
Route::get('/dashboard/service/report',function (){
    return view('dashboard.service.report.index', [
        'title' => "dashboard"
    ]); 
});
Route::get('/dashboard/polis',function (){
    return view('dashboard.polis.index', [
        'title' => "Data Poli"
    ]); 
});
Route::get('/dashboard/polis/create',function (){
    return view('dashboard.polis.create', [
        'title' => "Poli"
    ]); 
});
Route::get('/dashboard/polis/edit',function (){
    return view('dashboard.polis.edit', [
        'title' => "Poli"
    ]); 
});
