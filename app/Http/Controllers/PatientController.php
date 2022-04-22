<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.patients.index', [
            'title' => 'Pasien',
            'patients' => Patient::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('dashboard.patients.create', [
            'title' => 'Tambah Pasien'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'medic_record_number' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'id_card_number' => 'required',
            'bpjs_number' => 'required',
            'bpjs_medic' => 'required',
            'type' => 'required'
        ]); 

        Patient::create($validatedData);

        return redirect('/dashboard/patients')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('dashboard.patients.edit', [
            'title' => 'Ubah Pasien',
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'medic_record_number' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'id_card_number' => 'required',
            'bpjs_number' => 'required',
            'bpjs_medic' => 'required',
            'type' => 'required'
        ]); 

        // dd($validatedData); 
        
        Patient::where('id', $patient->id)
            ->update($validatedData);

            return redirect('/dashboard/patients')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::destroy($patient->id);
        return redirect('/dashboard/patients')->with('success', 'Data berhasil dihapus');
    }
}
 