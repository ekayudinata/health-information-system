<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use App\Http\Requests\StoreUserRoleRequest;
use App\Http\Requests\UpdateUserRoleRequest;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.userrole.index', [
            'title' => 'User Role', 
            'userroles' => UserRole::all()
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.userrole.create', [
            'title' => 'Add User Role',
        ]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRoleRequest $request)
    {
    
        $validateData  = $request->validate([
            "role" => "required|max:255|unique:user_roles"
        ]);
        
        UserRole::create($validateData);
        return redirect('/dashboard/userrole')->with('success', 'Data Role baru berhasil ditambah');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function show(UserRole $userRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $userrole = UserRole::find($id);
        return view('dashboard.userrole.edit', [
            'title' => "Edit User Role",
            'userrole' =>$userrole
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRoleRequest  $request
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRoleRequest $request, UserRole $userRole)
    {
        $validateData  = $request->validate([
            "role" => "required|max:255|unique:user_roles"
        ]);

        UserRole::where('id', $userRole->id)
            ->update($validateData);
        return redirect('/dashboard/userrole')->with('success', 'Data berhasil diubah');
   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRole  $userRole
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UserRole::destroy($id);
        return  redirect('/dashboard/userrole')->with('success', 'Berhasil Menghapus data Role');
  
    }
}
