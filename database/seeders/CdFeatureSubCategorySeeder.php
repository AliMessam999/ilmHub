<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFeatureSubCategorySeeder extends Seeder
{
    public function run(): void
    {
        // Get existing pivot table data
        $pivotData = DB::table('cd_feature_sub_categories')->get();
        
        // If no data exists, migrate from single sub_category_id
        if ($pivotData->isEmpty()) {
            $features = DB::table('cd_features')
                ->whereNotNull('sub_category_id')
                ->select('id', 'sub_category_id')
                ->get();
                
            foreach ($features as $feature) {
                DB::table('cd_feature_sub_categories')->insert([
                    'feature_id' => $feature->id,
                    'sub_category_id' => $feature->sub_category_id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        } else {
            // Re-insert existing pivot data
            foreach ($pivotData as $pivot) {
                DB::table('cd_feature_sub_categories')->updateOrInsert(
                    [
                        'feature_id' => $pivot->feature_id,
                        'sub_category_id' => $pivot->sub_category_id
                    ],
                    [
                        'created_at' => $pivot->created_at,
                        'updated_at' => $pivot->updated_at,
                    ]
                );
            }
        }
    }
}