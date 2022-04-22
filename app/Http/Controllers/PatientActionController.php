<?php

namespace App\Http\Controllers;

use App\Models\PatientAction;
use App\Http\Requests\StorePatientActionRequest;
use App\Http\Requests\UpdatePatientActionRequest;
use App\Models\Patient;

class PatientActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.patientactions.index', [
            'title' => 'Tindakan Pasien',
            'patientactions' => PatientAction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.patientactions.create', [
            'title' => 'Tindakan Pasien',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientActionRequest $request)
    {
        $validatedData = $request->validate([
            'action' => 'required'
        ]);

        PatientAction::create($validatedData);

        return redirect('/dashboard/patientactions')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientAction  $patientAction
     * @return \Illuminate\Http\Response
     */
    public function show(PatientAction $patientAction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientAction  $patientAction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patientAction = PatientAction::find($id);
        return view ('dashboard.patientactions.edit', [
            'title' => 'Tindakan Pasien',
            'patientaction' => $patientAction
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientActionRequest  $request
     * @param  \App\Models\PatientAction  $patientAction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientActionRequest $request, PatientAction $patientAction)
    {
        $validatedData = $request->validate([
            'action' => 'required'
        ]);
        // dd($validatedData); 

        PatientAction::where('id', $patientAction->id)
            ->update($validatedData);

        return redirect('/dashboard/patientactions')->with('success', 'Data berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientAction  $patientAction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PatientAction::destroy($id);
        return redirect('/dashboard/patientactions')->with('success', 'Data berhasil dihapus');
    }
}
