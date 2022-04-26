<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('dashboard.service.index', [
            'title' => 'Pelayanan',
            'administrations' => Administration::all()
        ]);
    }

    public function patientAction()
    {
        return view('dashboard.service.action.index', [
            'title' => 'Periksa',
            'administrations' => Administration::all() // get patient data from admnistration table (eliquent)
        ]);
    }

    public function patientTransaction()
    {
        return view('dashboard.service.transaction.index', [
            'title' => 'Tata Laksana'
        ]);
    }

    public function patientLab()
    {
        return view('dashboard.service.lab.index', [
            'title' => 'Laboratiorium'
        ]);
    }

    public function sickLetter()
    {
        // print sick letter
    }

    public function healthyLetter()
    {
        // print healthy letter
    }

    public function referralLetter()
    {
        // print referral letter
    }

    public function payment()
    {
        return view('dashboard.service.payment.index', [
            'title' => 'Pembayaran'
        ]);
    }
}
