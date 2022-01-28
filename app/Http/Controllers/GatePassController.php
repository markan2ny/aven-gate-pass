<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GatePassController extends Controller
{
    public function viewGatePass() {

        return view('gatepass.view');

    }
    public function createGatePass() {

        return view('gatepass.create');

    }
        
}
