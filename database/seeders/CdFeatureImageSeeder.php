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
    'deleted_at' => '2025-12-05 06:48:22',
    'created_at' => '2025-12-03 18:12:01',
    'updated_at' => '2025-12-05 06:48:22',
  ),
  1 => 
  array (
    'id' => 68,
    'feature_id' => 30,
    'image' => 'upload/featured/MU3HzSCLESrOS9nc4t5E6ZxerRlDaln2iuNKvnNP.webp',
    'alt' => NULL,
    'deleted_at' => '2025-12-05 06:48:57',
    'created_at' => '2025-12-04 18:20:09',
    'updated_at' => '2025-12-05 06:48:57',
  ),
  2 => 
  array (
    'id' => 69,
    'feature_id' => 28,
    'image' => 'upload/featured/y65myksSEn6h65oAXcdR4GFQQ6Cjkx62tMMdw1Kr.jpg',
    'alt' => NULL,
    'deleted_at' => '2025-12-05 06:48:22',
    'created_at' => '2025-12-05 06:37:33',
    'updated_at' => '2025-12-05 06:48:22',
  ),
  3 => 
  array (
    'id' => 70,
    'feature_id' => 28,
    'image' => 'upload/featured/JnSs5NNA8oXRfLY77SccYqaiH7csQGXsNNk2mZvm.jpg',
    'alt' => NULL,
    'deleted_at' => '2025-12-05 06:48:22',
    'created_at' => '2025-12-05 06:38:31',
    'updated_at' => '2025-12-05 06:48:22',
  ),
  4 => 
  array (
    'id' => 71,
    'feature_id' => 28,
    'image' => 'upload/featured/5G0enePBQjrLm4I8nvBi6akxAlPfSxeVCfmK8qLj.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 06:48:22',
    'updated_at' => '2025-12-05 06:48:22',
  ),
  5 => 
  array (
    'id' => 72,
    'feature_id' => 30,
    'image' => 'upload/featured/VB70D2TwmMQykC82DyeGoZEpiXbMtLfMe0seKtxO.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 06:48:57',
    'updated_at' => '2025-12-05 06:48:57',
  ),
);
        DB::table('cd_feature_images')->insert($data);
    }
}
