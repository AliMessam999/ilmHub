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
    'title' => 'ICT',
    'description' => '<p> Our ICT solutions ensure secure, scalable, and efficient
                    technology for your business</p>',
    'video' => 'frontend_assets/video/3.mp4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:04:38',
    'updated_at' => '2023-11-23 12:04:38',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Hydromet',
    'description' => '<p>From real-time data collection to predictive analytics, we
                    help industries make informed decisions for a sustainable
                    future</p>',
    'video' => 'frontend_assets/video/4.mp4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:06:06',
    'updated_at' => '2023-11-23 12:06:06',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Biotechnology',
    'description' => '<p>From cutting-edge lab technologies to sustainable solutions, we empower progress through science and technology.</p>',
    'video' => 'frontend_assets/video/5.mp4',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:07:33',
    'updated_at' => '2025-05-26 10:58:28',
  ),
);
        DB::table('cd_sliders')->insert($data);
    }
}
