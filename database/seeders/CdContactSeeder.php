<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdContactSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_contacts' table
        $data = array (
);
        DB::table('cd_contacts')->insert($data);
    }
}
