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
    'id' => 73,
    'feature_id' => 31,
    'image' => 'upload/featured/oQCdnC91NdU3YQzsJXlVVCTonbpGhGMczKo4OBGf.png',
    'alt' => 'zz',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:09:16',
    'updated_at' => '2025-12-09 12:09:16',
  ),
  1 => 
  array (
    'id' => 74,
    'feature_id' => 32,
    'image' => 'upload/featured/5ecCX6esDvCvFThuGDVgbHP4VTuozpCwAN0SnELl.png',
    'alt' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:17:47',
    'updated_at' => '2025-12-09 12:17:47',
  ),
  2 => 
  array (
    'id' => 75,
    'feature_id' => 33,
    'image' => 'upload/featured/xVjJaowWHvWQzHSQs7lo1esaovLRMkI4MIkaNooL.png',
    'alt' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:26:34',
    'updated_at' => '2025-12-09 12:26:34',
  ),
  3 => 
  array (
    'id' => 76,
    'feature_id' => 34,
    'image' => 'upload/featured/nLpNw2OasdLfAGmJ7cSC0w0IkUfeHhZM5y0E8fE9.png',
    'alt' => 'aa',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:33:54',
    'updated_at' => '2025-12-09 12:33:54',
  ),
  4 => 
  array (
    'id' => 77,
    'feature_id' => 35,
    'image' => 'upload/featured/NxwqHZ2zrch75gWfZHAThDP2By97HPSnWNFehTw5.png',
    'alt' => 'aaa',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:47:25',
    'updated_at' => '2025-12-09 12:47:25',
  ),
  5 => 
  array (
    'id' => 78,
    'feature_id' => 36,
    'image' => 'upload/featured/cn2yUjvARPyOryWxmYIKEAunltO2jDc7aj0ABtlD.png',
    'alt' => 'xx',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 12:55:20',
    'updated_at' => '2025-12-09 12:55:20',
  ),
  6 => 
  array (
    'id' => 79,
    'feature_id' => 37,
    'image' => 'upload/featured/nUZYfd54Jqdy0P8Nsr95Jida8ipdPRJD5OdErSkt.png',
    'alt' => 'ss',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:00:47',
    'updated_at' => '2025-12-09 13:00:47',
  ),
  7 => 
  array (
    'id' => 80,
    'feature_id' => 38,
    'image' => 'upload/featured/P39tRxKR5kDzo1WH6G0ptpnpcW6FU1uv8LZJnBKg.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:05:42',
    'updated_at' => '2025-12-09 13:05:42',
  ),
  8 => 
  array (
    'id' => 81,
    'feature_id' => 39,
    'image' => 'upload/featured/ZWqmfw47DKLMwmauDz45NR86eW1OriBtRF7Tpvge.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:09:40',
    'updated_at' => '2025-12-09 13:09:40',
  ),
  9 => 
  array (
    'id' => 82,
    'feature_id' => 40,
    'image' => 'upload/featured/7KA0jB6BhICtyZg1tgbqhz4vTI8H1d7nICbSG60H.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:13:04',
    'updated_at' => '2025-12-09 13:13:04',
  ),
  10 => 
  array (
    'id' => 83,
    'feature_id' => 41,
    'image' => 'upload/featured/KEZ67Sv1CvwFIJjbMvtXU1QSOFmuKuAJLAtnolJo.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:17:01',
    'updated_at' => '2025-12-09 13:17:01',
  ),
  11 => 
  array (
    'id' => 84,
    'feature_id' => 42,
    'image' => 'upload/featured/NgGykonGWHrW2rn2o4obORVy8uiIoRaqQdIPRV2N.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 13:20:46',
    'updated_at' => '2025-12-09 13:20:46',
  ),
);
        DB::table('cd_feature_images')->insert($data);
    }
}
