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
    'image' => 'assets/images/ict.png',
    'alt' => 'Utilizes biological systems',
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
    'image' => 'assets/images/hydromet.png',
    'alt' => 'monitoring of environment',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:06:06',
    'updated_at' => '2023-11-23 12:06:06',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Biotechnology',
    'description' => '<p>From cutting-edge lab technologies to sustainable solutions, we empower progress through science and technology.</p>',
    'image' => 'assets/images/biotech.png',
    'alt' => 'partner for all areas of ICT',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:07:33',
    'updated_at' => '2025-05-26 10:58:28',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Security Systems',
    'description' => '<p>From surveillance and access control to cybersecurity, we ensure safety and resilience in an evolving threat landscape.</p>',
    'image' => 'assets/images/security.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:08:23',
    'updated_at' => '2025-05-26 10:59:31',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Renewable Energy',
    'description' => '<p>Our Energy solutions drive efficiency and innovation in power generation, distribution, and management.</p>',
    'image' => 'assets/images/energy.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:08:23',
    'updated_at' => '2025-05-26 10:58:56',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Mining & Minerals',
    'description' => '<p>Enhancing efficiency, safety, and sustainability in resource extraction with advanced technology and data-driven insights.</p>',
    'image' => 'assets/images/mines.png',
    'alt' => 'converged security, safety',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:08:23',
    'updated_at' => '2025-05-26 10:59:16',
  ),
);
        DB::table('cd_sliders')->insert($data);
    }
}
