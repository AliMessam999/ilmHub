<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdSliderSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_sliders' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Powering Industries with Innovative Solutions',
    'description' => '<p>​​Delivering intelligent technologies that connect, protect, and power industries across every sector</p>',
    'video' => 'frontend_assets/video/3.mp4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:04:38',
    'updated_at' => '2025-11-28 06:05:27',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Where Technology Meets Transformation',
    'description' => '<p>Turning complex challenges into transformative outcomes through advanced, integrated, and future-ready technologies</p>',
    'video' => 'frontend_assets/video/4.mp4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:06:06',
    'updated_at' => '2025-11-29 11:28:42',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Biotechnology',
    'description' => '<p>From cutting-edge lab technologies to sustainable solutions, we empower progress through science and technology.</p>',
    'video' => 'frontend_assets/video/5.mp4',
    'deleted_at' => '2025-11-28 06:04:20',
    'created_at' => '2023-11-23 12:07:33',
    'updated_at' => '2025-11-28 06:04:20',
  ),
);
        DB::table('cd_sliders')->insert($data);
    }
}
