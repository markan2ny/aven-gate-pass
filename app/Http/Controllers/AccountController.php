<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function create() {

        $sites = Site::all();

        return view('account.create',compact('sites'));

    }

    public function store(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'role_name' => ['required', 'max:255'],
            'site_id' => ['required'],
        ]);


        User::create(
            [
                'site_id' => $request->site_id,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'username' => strtolower($request->username),
                'role_name'  => $request->role_name,
            ]
        );


        return "OK";

    }
}
