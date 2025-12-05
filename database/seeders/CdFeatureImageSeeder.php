<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFeatureImageSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_feature_images' table
        $data = array (
  0 => 
  array (
    'id' => 66,
    'feature_id' => 28,
    'image' => 'upload/featured/62I1YBX317Jd0GYSYbULu1X8UyELWNIOW2it9wxU.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-03 18:12:01',
    'updated_at' => '2025-12-03 18:12:01',
  ),
  1 => 
  array (
    'id' => 68,
    'feature_id' => 30,
    'image' => 'upload/featured/MU3HzSCLESrOS9nc4t5E6ZxerRlDaln2iuNKvnNP.webp',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-04 18:20:09',
    'updated_at' => '2025-12-04 18:20:09',
  ),
);
        DB::table('cd_feature_images')->insert($data);
    }
}
