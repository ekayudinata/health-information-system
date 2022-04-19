<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\EmployeePosition;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Employee $employee)
    {
        return view('dashboard.employee.index', [
            'title' => 'Employee',
            'employees' => Employee::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employee.create', [
            'title' => 'Data Employee',
            'employeepositions' => EmployeePosition::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'employeeposition_id' => 'required',
            'work_status' => 'required',
        ]); 

        Employee::create($validatedData);

        return redirect('/dashboard/employee')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employee.edit', [
            'title' => 'Data Pegawai',
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeRequest  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'employeeposition_id' => 'required',
            'work_status' => 'required',
        ]); 

        Employee::where('id', $employee->id)
            ->update($validatedData);

            return redirect('/dashboard/employee')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        Employee::destroy($employee->id);
        return redirect('/dashboard/employee')->with('success', 'Data berhasil dihapus');
    }
}
