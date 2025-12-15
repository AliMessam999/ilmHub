<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFeatureSubCategorySeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_feature_sub_categories' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'feature_id' => 53,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'feature_id' => 54,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'feature_id' => 55,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'feature_id' => 56,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'feature_id' => 57,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'feature_id' => 43,
    'sub_category_id' => 81,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'feature_id' => 44,
    'sub_category_id' => 86,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'feature_id' => 45,
    'sub_category_id' => 86,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'feature_id' => 46,
    'sub_category_id' => 86,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'feature_id' => 47,
    'sub_category_id' => 81,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  10 => 
  array (
    'id' => 11,
    'feature_id' => 47,
    'sub_category_id' => 86,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  11 => 
  array (
    'id' => 12,
    'feature_id' => 48,
    'sub_category_id' => 86,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  12 => 
  array (
    'id' => 13,
    'feature_id' => 49,
    'sub_category_id' => 81,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  13 => 
  array (
    'id' => 14,
    'feature_id' => 50,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  14 => 
  array (
    'id' => 15,
    'feature_id' => 51,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  15 => 
  array (
    'id' => 16,
    'feature_id' => 52,
    'sub_category_id' => 90,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);
        DB::table('cd_feature_sub_categories')->insert($data);
    }
}
