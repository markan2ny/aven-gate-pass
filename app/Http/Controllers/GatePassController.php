<?php

namespace App\Http\Controllers;

use App\Models\GatePass;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class GatePassController extends Controller
{
    public function viewGatePass() {

        $data = GatePass::with('companies')->get();
        dd($data);

        return view('gatepass.view');

    }
    public function createGatePass() {


        return view('gatepass.create');

    }

    public function store(Request $request) {

       $data = [
                'track_no' => $request['track_no'],
                'type_of_request' => $request['type_of_request'],
                'date'  => $request['date'],
                'name'  => $request['name'],
                'destination'   => $request['destination'],
                'department'    => $request['department'],
                'receiver'  =>  $request['receiver'],
                'vehicle'   =>  $request['vehicle'],
                'driver'    =>  $request['driver'],
                'purpose'   =>  $request['purpose'],
                'created_at'    =>  Carbon::now(),
            ];

        DB::table('gate_passes')
                ->insert($data);


        return "ok";

    }
        
}
