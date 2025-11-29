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
    'title' => 'Experience',
    'percentage' => '23+',
    'description' => 'Proven Excellence Built Over Years of Innovation',
    'position' => 'left',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:19',
    'updated_at' => '2025-11-29 04:39:06',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Projects Delivered',
    'percentage' => '200+',
    'description' => 'Delivering Complex Projects With Precision and Consistency',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:34',
    'updated_at' => '2025-11-29 04:39:50',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Strategic Partners',
    'percentage' => '50+',
    'description' => 'Collaborating With Global Leaders to Drive Innovation',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:26:50',
    'updated_at' => '2025-11-29 04:40:19',
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
    'title' => 'Field Hours Logged',
    'percentage' => '250,000+',
    'description' => 'Proven Capability Through Extensive On-Ground Operations',
    'position' => 'right',
    'deleted_at' => NULL,
    'created_at' => '2025-11-18 10:16:19',
    'updated_at' => '2025-11-29 04:40:44',
  ),
  6 => 
  array (
    'id' => 8,
    'title' => 'Ali Messam',
    'percentage' => '70+',
    'description' => 'New to CDigital',
    'position' => 'top',
    'deleted_at' => '2025-11-21 09:57:59',
    'created_at' => '2025-11-18 10:42:42',
    'updated_at' => '2025-11-21 09:57:59',
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
  8 => 
  array (
    'id' => 10,
    'title' => 'Digital Transformation',
    'percentage' => '95%',
    'description' => NULL,
    'position' => 'progress_bar',
    'deleted_at' => NULL,
    'created_at' => '2025-11-21 10:51:16',
    'updated_at' => '2025-11-21 10:52:41',
  ),
  9 => 
  array (
    'id' => 11,
    'title' => 'Sustainablilty Commitment',
    'percentage' => '90%',
    'description' => NULL,
    'position' => 'progress_bar',
    'deleted_at' => NULL,
    'created_at' => '2025-11-21 10:53:02',
    'updated_at' => '2025-11-21 10:53:02',
  ),
);
        DB::table('cd_skills')->insert($data);
    }
}
