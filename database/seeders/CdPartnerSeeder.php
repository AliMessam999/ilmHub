<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdPartnerSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_partners' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Siemens',
    'sort' => 1,
    'order' => 1,
    'alt' => 'Siemens',
    'image' => 'upload/partner/bDMSv7p0OBmvzi91LaQgqKzASSURyxe3mWJtAzmu.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:17:54',
    'updated_at' => '2025-12-20 09:38:07',
    'link' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'OTT-Hydromet',
    'sort' => 2,
    'order' => 2,
    'alt' => 'OTT-Hydromet',
    'image' => 'upload/partner/3sUhuM4w0C6Vu92qauhPIwwBLuyJ8poZLakns1fN.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:18:27',
    'updated_at' => '2025-12-20 09:38:24',
    'link' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Camille-Beour',
    'sort' => 3,
    'order' => 3,
    'alt' => 'Camille-Beour',
    'image' => 'upload/partner/BfQD3jOidivgN3nQ2i2IUOuMNJdXhmZzcBcIJVvC.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:19:09',
    'updated_at' => '2025-12-20 09:38:49',
    'link' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Hengstler',
    'sort' => 4,
    'order' => 4,
    'alt' => 'Hengstler',
    'image' => 'upload/partner/8KRo64IclrWv45bbdQep9ES5aDB8dvizJR2x6OrD.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:59:51',
    'updated_at' => '2025-12-20 09:39:11',
    'link' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Sommer',
    'sort' => 5,
    'order' => 5,
    'alt' => 'Sommer',
    'image' => 'upload/partner/u8jRuTmkfdhXUcYuchPVgBQFuH0FfnqAXqRKkqI0.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:00:21',
    'updated_at' => '2025-12-20 09:39:38',
    'link' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Kipp-Zonen',
    'sort' => 6,
    'order' => 6,
    'alt' => 'Kipp-Zonen',
    'image' => 'upload/partner/QK3OnXRhOo3oCM8oYn4olj2G1MrdqqQOaigSLiPs.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:00:56',
    'updated_at' => '2025-12-20 09:40:11',
    'link' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Hydrolab',
    'sort' => 7,
    'order' => 7,
    'alt' => 'Hydrolab',
    'image' => 'upload/partner/jpKO5xYNNwiLEeFObV7BiZiWHZhnpaKd9J34QRqY.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:01:32',
    'updated_at' => '2025-12-20 09:40:32',
    'link' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'Sutron',
    'sort' => 8,
    'order' => 8,
    'alt' => 'Sutron',
    'image' => 'upload/partner/UPZLNSRbQt64NBhezYGzgHYpKhAT3SpVgzoNybFU.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:02:21',
    'updated_at' => '2025-12-20 09:40:55',
    'link' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'title' => 'HP',
    'sort' => 9,
    'order' => 9,
    'alt' => 'HP',
    'image' => 'upload/partner/NbuOQZpxXw8JBfdw2pYHqOBa5Ijl4GHIHjiFSqX7.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:02:55',
    'updated_at' => '2025-12-20 09:41:16',
    'link' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'title' => 'Dell',
    'sort' => 10,
    'order' => 10,
    'alt' => 'Dell',
    'image' => 'upload/partner/nItjLk8pwIF6vHCgUrDNfjb3lOsAjMGi0mpwNNjo.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:03:32',
    'updated_at' => '2025-12-20 09:41:36',
    'link' => NULL,
  ),
  10 => 
  array (
    'id' => 11,
    'title' => 'Synib',
    'sort' => 11,
    'order' => 11,
    'alt' => 'Synib',
    'image' => 'upload/partner/QPg1BVdENxRaO9aOhip9Ld3Xxm91uBJcn00OwTWD.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:04:05',
    'updated_at' => '2025-12-20 09:42:01',
    'link' => NULL,
  ),
  11 => 
  array (
    'id' => 12,
    'title' => 'Adhua',
    'sort' => 12,
    'order' => 12,
    'alt' => 'Adhua',
    'image' => 'upload/partner/KnT4yYqVlhekqzFcLOAAwpmFxk4Im6PAOgCOejCu.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:04:42',
    'updated_at' => '2025-12-20 09:42:24',
    'link' => NULL,
  ),
  12 => 
  array (
    'id' => 13,
    'title' => 'Huawei',
    'sort' => 13,
    'order' => 13,
    'alt' => 'Huawei',
    'image' => 'upload/partner/GaCq1JdjA20fM9uwVfquQf8GTBHN9aidPJo8ACRZ.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:05:12',
    'updated_at' => '2025-12-20 09:42:46',
    'link' => NULL,
  ),
  13 => 
  array (
    'id' => 14,
    'title' => 'EZY',
    'sort' => 14,
    'order' => 14,
    'alt' => 'EZY',
    'image' => 'upload/partner/z0TUnnp5EZ91FVBRiD0D1LXKd8mKRKG3xByb3ASi.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:05:38',
    'updated_at' => '2025-12-20 09:43:10',
    'link' => NULL,
  ),
  14 => 
  array (
    'id' => 15,
    'title' => 'AWAN',
    'sort' => 15,
    'order' => 15,
    'alt' => 'AWAN',
    'image' => 'upload/partner/OwdmJLkyLQRDjbWIuC3PXkDEckSH9mGwik2t3C0u.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:06:03',
    'updated_at' => '2025-12-20 09:43:40',
    'link' => NULL,
  ),
  15 => 
  array (
    'id' => 16,
    'title' => 'Sangfor',
    'sort' => 16,
    'order' => 16,
    'alt' => 'Sangfor',
    'image' => 'upload/partner/t7iocJdWwgAZ0yDLFg6CGCuZVN9CBfzr2yUIJ3dZ.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:06:31',
    'updated_at' => '2025-12-20 09:44:03',
    'link' => NULL,
  ),
  16 => 
  array (
    'id' => 17,
    'title' => 'Dyness',
    'sort' => 17,
    'order' => 17,
    'alt' => 'Dyness',
    'image' => 'upload/partner/4M3IHLzdzfU5qmz9slMCpbV8yza7wwYPy2b0Xp1K.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:07:03',
    'updated_at' => '2025-12-20 09:44:27',
    'link' => NULL,
  ),
  17 => 
  array (
    'id' => 18,
    'title' => 'Astronergy',
    'sort' => 18,
    'order' => 18,
    'alt' => 'Astronergy',
    'image' => 'upload/partner/uDmDLtqvBDCWyFEkiF8Qutn9xihTSdmO2tVHQvGT.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:07:34',
    'updated_at' => '2025-12-20 09:45:01',
    'link' => NULL,
  ),
  18 => 
  array (
    'id' => 19,
    'title' => 'COWay',
    'sort' => 19,
    'order' => 19,
    'alt' => 'COWay',
    'image' => 'upload/partner/1KizUWTIbxnGKmv21VC0RwJnt8LrhoPwFrPNqOOw.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:08:19',
    'updated_at' => '2025-12-20 09:45:23',
    'link' => NULL,
  ),
  19 => 
  array (
    'id' => 20,
    'title' => 'CareDDI',
    'sort' => 20,
    'order' => 20,
    'alt' => 'CareDDI',
    'image' => 'upload/partner/Qe5mEgvkqqQbbszyFhmJZCJ5kRh0TpjFjgQ11mEY.png',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 05:23:21',
    'updated_at' => '2025-12-20 09:45:48',
    'link' => NULL,
  ),
);
        DB::table('cd_partners')->insert($data);
    }
}
