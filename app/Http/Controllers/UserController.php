<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserRole;
use App\Models\Employee;
use App\Models\EmployeePosition;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        return view('dashboard.useraccount.index', [
            'title' => 'Akun User',
            'users' => User::all(),
            'userroles' => UserRole::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('dashboard.useraccount.create', [
            'title' => 'Akun User',
            'userroles' => UserRole::all(),
            'employees' => Employee::all()
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
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_role_id' => 'required',
            'employee_id' => 'required'
        ]); 

        User::create($validatedData);

        return redirect('/dashboard/useraccount')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($user);
        // return view('dashboard.useraccount.edit', [
        //     'title' => 'Ubah Role User',
        //     'user' => $user,
        //     'userroles' => UserRole::all(),
        //     'employees' => Employee::all()
        // ]);
        $datauser = User::find($id);
        return view('dashboard.useraccount.edit', [
            'title' => "Ubah Akun User",
            'user' => $datauser,
            'userroles' => UserRole::all(),
            'employees' => Employee::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        // dd($request->all());
        $validateData  = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'user_role_id' => 'required',
            'employee_id' => 'required'
        ]);

            // dd($validateData);

        User::where('id', $id)
            ->update($validateData);
        return redirect('/dashboard/useraccount')->with('success', 'Data berhasil diubah');

        // dd($request->all());
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'user_role_id' => 'required',
        //     'employee_id' => 'required'
        // ]); 

        // dd($validatedData); 
        
        // User::where('id', $user->id)
        //     ->update($validatedData);

        //     return redirect('/dashboard/useraccount')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('/dashboard/useraccount')->with('success', 'Data berhasil dihapus');
    }
}
