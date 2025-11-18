<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdSkillSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_skills' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Experiences',
    'percentage' => '20+',
    'description' => 'Decades of Experience, Endless Innovation',
    'position' => 'left',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:19',
    'updated_at' => '2025-11-18 10:16:48',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Projects',
    'percentage' => '100+',
    'description' => 'Decades of Experience, Endless Innovation',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:34',
    'updated_at' => '2025-11-18 10:14:54',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Partner',
    'percentage' => '50+',
    'description' => 'Decades of Experience, Endless Innovation',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:50',
    'updated_at' => '2025-11-18 10:15:30',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'SECURITY',
    'percentage' => '80',
    'description' => NULL,
    'position' => NULL,
    'deleted_at' => '2025-05-15 16:43:51',
    'created_at' => '2023-11-23 12:27:06',
    'updated_at' => '2025-05-15 16:43:51',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'RENEWABLE ENERGY',
    'percentage' => '40',
    'description' => NULL,
    'position' => NULL,
    'deleted_at' => '2025-05-15 16:43:56',
    'created_at' => '2023-11-23 12:27:24',
    'updated_at' => '2025-05-15 16:43:56',
  ),
  5 => 
  array (
    'id' => 7,
    'title' => 'Clients Served',
    'percentage' => '50+',
    'description' => 'Decades of Experience, Endless Innovation',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 10:16:19',
    'updated_at' => '2025-11-18 10:16:19',
  ),
  6 => 
  array (
    'id' => 8,
    'title' => 'Ali Messam',
    'percentage' => '70+',
    'description' => 'New to CDigital',
    'position' => 'top',
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 10:42:42',
    'updated_at' => '2025-11-18 10:43:58',
  ),
  7 => 
  array (
    'id' => 9,
    'title' => 'Qui doloremque nesci',
    'percentage' => 'Beatae non ut quo si',
    'description' => 'Sunt rerum odio ut a',
    'position' => 'left',
    'deleted_at' => '2025-11-18 10:54:14',
    'created_at' => '2025-11-18 10:53:27',
    'updated_at' => '2025-11-18 10:54:14',
  ),
);
        DB::table('cd_skills')->insert($data);
    }
}
