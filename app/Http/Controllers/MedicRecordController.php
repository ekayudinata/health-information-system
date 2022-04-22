<?php

namespace App\Http\Controllers;

use App\Models\MedicRecord;
use App\Http\Requests\StoreMedicRecordRequest;
use App\Http\Requests\UpdateMedicRecordRequest;

class MedicRecordController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicRecordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicRecordRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicRecord  $medicRecord
     * @return \Illuminate\Http\Response
     */
    public function show(MedicRecord $medicRecord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicRecord  $medicRecord
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicRecord $medicRecord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicRecordRequest  $request
     * @param  \App\Models\MedicRecord  $medicRecord
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicRecordRequest $request, MedicRecord $medicRecord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicRecord  $medicRecord
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicRecord $medicRecord)
    {
        //
    }
}
