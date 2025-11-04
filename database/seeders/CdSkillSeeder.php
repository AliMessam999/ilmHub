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
    'title' => 'ICT INFRASTRUCTURE',
    'percentage' => '80',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:26:19',
    'updated_at' => '2023-11-23 07:26:19',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'HYDROMET',
    'percentage' => '70',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:26:34',
    'updated_at' => '2023-11-23 07:26:34',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'BIOTECH',
    'percentage' => '55',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:26:50',
    'updated_at' => '2023-11-23 07:26:50',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'SECURITY',
    'percentage' => '80',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:27:06',
    'updated_at' => '2023-11-23 07:27:06',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'RENEWABLE ENERGY',
    'percentage' => '40',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:27:24',
    'updated_at' => '2023-11-23 07:27:24',
  ),
);
        DB::table('cd_skills')->insert($data);
    }
}
