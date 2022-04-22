<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Http\Requests\StorePoliRequest;
use App\Http\Requests\UpdatePoliRequest;
use App\Models\Employee;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.polis.index', [
            'title' => 'Poli',
            'polis' => Poli::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.polis.create', [
            'title' => 'Poli',
            'employees' => Employee::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePoliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePoliRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'doctor_id' => 'required'
        ]);

        Poli::create($validatedData);

        return redirect('/dashboard/polis')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function show(Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function edit(Poli $poli)
    {
        return view ('dashboard.polis.create', [
            'title' => 'Poli',
            'poli' => $poli
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePoliRequest  $request
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePoliRequest $request, Poli $poli)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'doctor_id' => 'required'
        ]);

        Poli::where('id', $poli->id)
            ->update($validatedData);

        return redirect('/dashboard/polis')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poli  $poli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poli $poli)
    {
        Poli::destroy($poli->id);
        return redirect('/dashboard/polis')->with('success', 'Data berhasil dihapus');
    }
}
