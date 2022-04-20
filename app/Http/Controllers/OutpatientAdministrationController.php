<?php

namespace App\Http\Controllers;

use App\Models\OutpatientAdministration;
use App\Http\Requests\StoreOutpatientAdministrationRequest;
use App\Http\Requests\UpdateOutpatientAdministrationRequest;

class OutpatientAdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

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
     * @param  \App\Http\Requests\StoreOutpatientAdministrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutpatientAdministrationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OutpatientAdministration  $outpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function show(OutpatientAdministration $outpatientAdministration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OutpatientAdministration  $outpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function edit(OutpatientAdministration $outpatientAdministration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutpatientAdministrationRequest  $request
     * @param  \App\Models\OutpatientAdministration  $outpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutpatientAdministrationRequest $request, OutpatientAdministration $outpatientAdministration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OutpatientAdministration  $outpatientAdministration
     * @return \Illuminate\Http\Response
     */
    public function destroy(OutpatientAdministration $outpatientAdministration)
    {
        //
    }
}
