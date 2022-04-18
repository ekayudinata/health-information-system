<?php

namespace App\Http\Controllers;

use App\Models\EmployeePosition;
use Illuminate\Http\Request;

class EmployeePositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.employeeposition.index', [
            'title' => "Jabatan Karyawan",
            "employeepostions" => EmployeePosition::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employeeposition.create', [
            'title' => "Tambah jabatan"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData  = $request->validate([
            "name_position" => "required|max:255|unique:employee_positions"
        ]);

        EmployeePosition::create($validateData);
        return redirect('/dashboard/employeeposition')->with('success', 'Data jabatan baru berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeePosition  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataemployee = EmployeePosition::find($id);
        return view('dashboard.employeeposition.edit', [
            'title' => "Edit Jabatan",
            'employeeposition' => $dataemployee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData  = $request->validate([
            "name_position" => "required|max:255|unique:employee_positions"
        ]);

        EmployeePosition::where('id', $id)
            ->update($validateData);
        return redirect('/dashboard/employeeposition')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EmployeePosition::destroy($id);
        return  redirect('/dashboard/employeeposition')->with('success', 'Berhasil Menghapus data jabatan');
    }
}
