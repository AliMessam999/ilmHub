<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFooterSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_footers' table
        $data = array (
);
        DB::table('cd_footers')->insert($data);
    }
}
