<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index() {

        $sites = Site::with('getUsers')->get();

        // foreach( $users as $user ) {
        //     echo $user->site_name;
        //     foreach( $user->getUsers as $raw) {
        //         echo $raw->name;
        //     }
        // }

        return view('sites.create');

    }


    public function viewSites() {

        $sites = Site::orderBy('created_at', 'desc')
                        ->get();

        return view('sites.view', compact('sites'));

    }

    public function profileSite($id) {

        $information = Site::with('getUsers')->get()->find($id);

        return view('sites.profile', compact('information'));

    }

    public function store(Request $request) {

        $request->validate([
            'site_name' => 'required',
        ]);

        DB::table('sites')
                ->insert([
                    'site_name' => $request['site_name'],
                    'created_at' => Carbon::now(),
                ]);
        
        return "OK";
    }
}
