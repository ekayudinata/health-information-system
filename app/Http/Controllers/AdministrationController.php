<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index(){
        
        return view('dashboard.administration.index', [
            'title' => "Administrasi",
        ]);
    }
   
}
