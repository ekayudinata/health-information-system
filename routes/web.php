<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\EmployeePositionController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InpatientAdministrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientActionController;
use App\Http\Controllers\MedicRecordController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\ServiceController;
use App\Models\Employee;
use App\Models\MedicRecord;
use App\Models\Patient;
use App\Models\PatientAction;
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

Route::resource('/dashboard/employee',EmployeeController::class);
Route::get('/dashboard/administration/listpatient',[AdministrationController::class,'searchingpatient']);
Route::resource('/dashboard/administration', AdministrationController::class);

Route::resource('/dashboard/clinics',ClinicController::class);

Route::resource('/dashboard/patientactions',PatientActionController::class)->middleware('auth');

Route::get('/dashboard/service', [ServiceController::class, 'index'])->middleware('auth');
Route::get('/dashboard/service/action', [ServiceController::class, 'patientAction'])->middleware('auth');

Route::get('/dashboard/service/report',function (){
    return view('dashboard.service.report.index', [
        'title' => "dashboard"
    ]); 
});

Route::resource('/dashboard/polis',PoliController::class);