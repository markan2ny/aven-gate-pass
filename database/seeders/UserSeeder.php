<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')
                ->insert([
                    [
                        'name' => 'Admin',
                        'username' => strtolower('admin'),
                        'password' => Hash::make('password'),
                        'site_id'   => 1,
                        'role_name' => 'Administrator',
                        'created_at' => Carbon::now(),
                    ]
                ]);
       
    }
}
