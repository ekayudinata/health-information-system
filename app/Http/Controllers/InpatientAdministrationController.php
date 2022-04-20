<?php

namespace App\Http\Controllers;

use App\Models\InpatientAdministration;
use App\Http\Requests\StoreInpatientAdministrationRequest;
use App\Http\Requests\UpdateInpatientAdministrationRequest;

class InpatientAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.administration.inpatientadministration.index', [
            'title' => 'HIS | Admis rawat inap'
        ]); 

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
     * @param  \App\Http\Requests\StoreInpatientAdministrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInpatientAdministrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InpatientAdministration  $inpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function show(InpatientAdministration $inpatientAdministration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InpatientAdministration  $inpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function edit(InpatientAdministration $inpatientAdministration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInpatientAdministrationRequest  $request
     * @param  \App\Models\InpatientAdministration  $inpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInpatientAdministrationRequest $request, InpatientAdministration $inpatientAdministration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InpatientAdministration  $inpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function destroy(InpatientAdministration $inpatientAdministration)
    {
        //
    }
}
