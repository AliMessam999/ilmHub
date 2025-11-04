<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdTestimonialSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_testimonials' table
        $data = array (
);
        DB::table('cd_testimonials')->insert($data);
    }
}
