<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')
                ->insert([
                    [
                        'site_name' => 'Aven Fashion',
                        'created_at'    => Carbon::now(),
                    ],
                    [
                        'site_name' => 'Teladeoro Main',
                        'created_at'    => Carbon::now(),
                    ],
                    [
                        'site_name' => 'Peach Blossom',
                        'created_at'    => Carbon::now(),
                    ],
                    [
                        'site_name' => 'Sta. Rosa',
                        'created_at'    => Carbon::now(),
                    ],
                    [
                        'site_name' => 'Teladeoro Small',
                        'created_at'    => Carbon::now(),
                    ]
                ]
                );
    }
}
