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
    'image' => 'upload/partner/gVVFrlHA4tSb5YnAStRmKnTtP1htg2YHN72iT8Vc.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:17:54',
    'updated_at' => '2025-12-09 05:25:38',
    'link' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'OTT-Hydromet',
    'sort' => 2,
    'order' => 2,
    'alt' => 'OTT-Hydromet',
    'image' => 'upload/partner/PJXVDfCCmZg1XngjuC19kQGOT1CvopAkIIxw1f2w.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:18:27',
    'updated_at' => '2025-12-09 05:25:55',
    'link' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Camille-Beour',
    'sort' => 3,
    'order' => 3,
    'alt' => 'Camille-Beour',
    'image' => 'upload/partner/IvCfM0HRFSY5suWfYGYcF7iy4uEWytj68uP2E4aH.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:19:09',
    'updated_at' => '2025-12-09 05:26:17',
    'link' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Hengstler',
    'sort' => 4,
    'order' => 4,
    'alt' => 'Hengstler',
    'image' => 'upload/partner/gnhcG9pBqG7IhGt8JuSXi0A5f06OorekIwqDpZuz.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 15:59:51',
    'updated_at' => '2025-12-09 05:26:38',
    'link' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Sommer',
    'sort' => 5,
    'order' => 5,
    'alt' => 'Sommer',
    'image' => 'upload/partner/rJmKe8UNQgVhAq7nf2aAogBIOVG3Yqj4Xzjn0dC7.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:00:21',
    'updated_at' => '2025-12-09 05:26:58',
    'link' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Kipp-Zonen',
    'sort' => 6,
    'order' => 6,
    'alt' => 'Kipp-Zonen',
    'image' => 'upload/partner/RFxxqjPN43nLGH4hG5t4U52B4lXLYwgTtZ7M2a0T.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:00:56',
    'updated_at' => '2025-12-09 05:27:33',
    'link' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Hydrolab',
    'sort' => 7,
    'order' => 7,
    'alt' => 'Hydrolab',
    'image' => 'upload/partner/7e267kFY25fYi60Yclvv0ROfHg805c083ogzW6xx.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:01:32',
    'updated_at' => '2025-12-09 05:27:51',
    'link' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'Sutron',
    'sort' => 8,
    'order' => 8,
    'alt' => 'Sutron',
    'image' => 'upload/partner/zFPdR1X0wBoRi93WUA2ULSNqANLIdzHOe4A6JJUx.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:02:21',
    'updated_at' => '2025-12-09 05:28:12',
    'link' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'title' => 'HP',
    'sort' => 9,
    'order' => 9,
    'alt' => 'HP',
    'image' => 'upload/partner/ztLMw9iXUoHRploFremLRud0YABxFv8SnwdvqqcA.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:02:55',
    'updated_at' => '2025-12-09 05:28:29',
    'link' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'title' => 'Dell',
    'sort' => 10,
    'order' => 10,
    'alt' => 'Dell',
    'image' => 'upload/partner/Ff8sATd9MTVJj3MBhW0T8MLtUMlVrHWEIcfrhrmc.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:03:32',
    'updated_at' => '2025-12-09 05:28:46',
    'link' => NULL,
  ),
  10 => 
  array (
    'id' => 11,
    'title' => 'Synib',
    'sort' => 11,
    'order' => 11,
    'alt' => 'Synib',
    'image' => 'upload/partner/G223osMKUuHgqO5hO4KTvS8BaJXzemONC4ON2Lji.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:04:05',
    'updated_at' => '2025-12-09 05:19:12',
    'link' => NULL,
  ),
  11 => 
  array (
    'id' => 12,
    'title' => 'Adhua',
    'sort' => 12,
    'order' => 12,
    'alt' => 'Adhua',
    'image' => 'upload/partner/0OJKYbzydWa10fUSqpEwhTd5UtATVxuRaNs75ThG.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:04:42',
    'updated_at' => '2025-12-09 05:19:32',
    'link' => NULL,
  ),
  12 => 
  array (
    'id' => 13,
    'title' => 'Huawei',
    'sort' => 13,
    'order' => 13,
    'alt' => 'Huawei',
    'image' => 'upload/partner/qdzS8NjqYXBw6Ouy4N3MV0bhUuwi5Gio7OQaGrP0.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:05:12',
    'updated_at' => '2025-12-09 05:19:55',
    'link' => NULL,
  ),
  13 => 
  array (
    'id' => 14,
    'title' => 'EZY',
    'sort' => 14,
    'order' => 14,
    'alt' => 'EZY',
    'image' => 'upload/partner/fdGlAuPK9Oq0f0rjesTdWoqejHmZMQwprCn700b5.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:05:38',
    'updated_at' => '2025-12-09 05:20:15',
    'link' => NULL,
  ),
  14 => 
  array (
    'id' => 15,
    'title' => 'AWAN',
    'sort' => 15,
    'order' => 15,
    'alt' => 'AWAN',
    'image' => 'upload/partner/lbUsYImy8exVcTCiLS96lV4T0EnqQfZYeT8t6C1g.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:06:03',
    'updated_at' => '2025-12-09 05:20:34',
    'link' => NULL,
  ),
  15 => 
  array (
    'id' => 16,
    'title' => 'Sangfor',
    'sort' => 16,
    'order' => 16,
    'alt' => 'Sangfor',
    'image' => 'upload/partner/Zagw3s5YXCgJybRg2GU4UQDiCZ4NV3hJMrvuBQ7p.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:06:31',
    'updated_at' => '2025-12-09 05:20:54',
    'link' => NULL,
  ),
  16 => 
  array (
    'id' => 17,
    'title' => 'Dyness',
    'sort' => 18,
    'order' => 18,
    'alt' => 'Dyness',
    'image' => 'upload/partner/yVE6dZ1buRw1ShLksxIeLDIp2eu0qDOtAEmLHCUa.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:07:03',
    'updated_at' => '2025-12-09 05:21:14',
    'link' => NULL,
  ),
  17 => 
  array (
    'id' => 18,
    'title' => 'Astronergy',
    'sort' => 19,
    'order' => 19,
    'alt' => 'Astronergy',
    'image' => 'upload/partner/Le9zuWiT2fPpgMHl9UJXpEd05Wbyfr067JBSsWFm.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:07:34',
    'updated_at' => '2025-12-09 05:21:37',
    'link' => NULL,
  ),
  18 => 
  array (
    'id' => 19,
    'title' => 'COWay',
    'sort' => 20,
    'order' => 19,
    'alt' => 'COWay',
    'image' => 'upload/partner/RvtELh1mp9P1xS6HFKWb1UM7rCBB1hv0zQJdxX7K.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 16:08:19',
    'updated_at' => '2025-12-09 05:22:00',
    'link' => NULL,
  ),
  19 => 
  array (
    'id' => 20,
    'title' => 'CareDDI',
    'sort' => 20,
    'order' => 20,
    'alt' => 'CareDDI',
    'image' => 'upload/partner/mhej4eFYvE07CahQ0bET5X1pzLgr7rPKTKk3yFb0.png',
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 05:23:21',
    'updated_at' => '2025-12-09 05:23:21',
    'link' => NULL,
  ),
);
        DB::table('cd_partners')->insert($data);
    }
}
