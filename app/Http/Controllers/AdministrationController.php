<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\Patient;
use App\Models\Poli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard.administrations.index',[
            'title' => "Administration", 
            'administrations' => Administration::all()
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.administrations.create',[
            'title' => "Administration", 
            'polis' => Poli::all()
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
        // ddd($request); 

        $validatePatientData = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'nationality' => 'required',
            'id_card_number' => 'required',
            'bpjs_number' => 'required',
            'bpjs_medic' => 'required'
        ]); 

        // $savepatientdata = Patient::create($validatePatientData);
        
        $storePatient = new Patient(); 
        $storePatient->name = $validatePatientData['name'] ; 
        $storePatient->gender = $validatePatientData['gender'] ; 
        $storePatient->birth_date = $validatePatientData['birth_date'] ; 
        $storePatient->address = $validatePatientData['address'] ; 
        $storePatient->phone = $validatePatientData['phone'] ; 
        $storePatient->nationality = $validatePatientData['nationality'] ; 
        $storePatient->id_card_number = $validatePatientData['id_card_number'] ; 
        $storePatient->bpjs_number = $validatePatientData['bpjs_number'] ; 
        $storePatient->bpjs_medic = $validatePatientData['bpjs_medic'] ; 
        $storePatient->save(); 
        $idpatient = $storePatient->id; 
        // dd($idpatient); 

        // $idpatient = DB::table('patients')->insertGetId([
        //        'name' => $validatePatientData['name'] ,  
        //        'gender' => $validatePatientData['gender'] , 
        //        'birth_date' => $validatePatientData['birth_date'] , 
        //        'address' => $validatePatientData['address'] , 
        //        'phone' => $validatePatientData['phone'] , 
        //        'nationality' => $validatePatientData['nationality'] , 
        //        'id_card_number' => $validatePatientData['id_card_number'] , 
        //        'bpjs_number' => $validatePatientData['bpjs_number'] , 
        //        'bpjs_medic' => $validatePatientData['bpjs_medic'] ,
        //         ]
        // );
        

        $validatedAdministrationData = $request->validate([
            'poli_id' => 'required',
        ]); 
        
        $validatedAdministrationData['status'] = 'Dilayani'; 
        $validatedAdministrationData['patient_id'] = $idpatient; 
        $validatedAdministrationData['clinic_id'] = 1; 

        Administration::create($validatedAdministrationData); 

        return redirect('/dashboard/administration')->with('success', 'Data berhasil ditambahkan');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
