<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')
                ->insert(
                    [
                        'name' => 'Administrator',
                        'email' => 'admin@app.com',
                        'password' => Hash::make('password'),
                    ]
                );
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);
     
        $user->assignRole('Admin');

    }
}
