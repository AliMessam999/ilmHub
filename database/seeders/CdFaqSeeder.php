<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFaqSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_faqs' table
        $data = array (
);
        DB::table('cd_faqs')->insert($data);
    }
}
