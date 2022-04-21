<?php

namespace App\Http\Controllers;

use App\Models\PatientAction;
use App\Http\Requests\StorePatientActionRequest;
use App\Http\Requests\UpdatePatientActionRequest;

class PatientActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientActionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientActionRequest $request)
    {
        //
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
    public function edit(PatientAction $patientAction)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientAction  $patientAction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientAction $patientAction)
    {
        //
    }
}
