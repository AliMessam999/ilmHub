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
    'title' => 'Years of Industry Experience',
    'percentage' => '20+',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:19',
    'updated_at' => '2025-06-03 10:13:11',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Successful Projects delivered',
    'percentage' => '100+',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:34',
    'updated_at' => '2025-06-03 10:13:18',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Partnerships & Collaborations',
    'percentage' => '50+',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:50',
    'updated_at' => '2025-06-03 10:13:26',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'SECURITY',
    'percentage' => '80',
    'deleted_at' => '2025-05-15 16:43:51',
    'created_at' => '2023-11-23 12:27:06',
    'updated_at' => '2025-05-15 16:43:51',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'RENEWABLE ENERGY',
    'percentage' => '40',
    'deleted_at' => '2025-05-15 16:43:56',
    'created_at' => '2023-11-23 12:27:24',
    'updated_at' => '2025-05-15 16:43:56',
  ),
);
        DB::table('cd_skills')->insert($data);
    }
}
