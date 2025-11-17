<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdSolutionSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_solutions' table
        $data = array (
  0 => 
  array (
    'id' => 94,
    'type' => 'Project',
    'alt' => 'Hydrological-Monitoring',
    'image' => 'upload/project/gxCS0ONxpJsleqtH8FSFBARBoqEjfRj1eLzLqFHr.png',
    'description' => '<p>Our hydrological monitoring solutions provide accurate, real-time insights into water levels, flow, and quality. Designed to support effective decision-making, we help governments, researchers, and communities manage water resources responsibly &mdash; ensuring resilience against floods, droughts, and environmental change.</p>',
    'category_id' => 15,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:13:43',
    'updated_at' => '2025-11-15 10:13:43',
    'title' => 'Real-Time Awareness for a Resilient Water Future',
    'slug' => '',
  ),
  1 => 
  array (
    'id' => 95,
    'type' => 'Project',
    'alt' => 'IT Infrastructure & Hardware',
    'image' => 'upload/project/sFlgKWTU8xOIe977Squddt8CtCT9RyWU86eXn6t4.png',
    'description' => '<p>IT Infrastructure &amp; Hardware</p>',
    'category_id' => 8,
    'deleted_at' => NULL,
    'created_at' => '2025-11-15 10:27:10',
    'updated_at' => '2025-11-15 10:27:10',
    'title' => 'IT Infrastructure & Hardware',
    'slug' => '',
  ),
);
        DB::table('cd_solutions')->insert($data);
    }
}
