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
    'feature_id' => 43,
    'sub_category_id' => 81,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);
        DB::table('cd_feature_sub_categories')->insert($data);
    }
}
