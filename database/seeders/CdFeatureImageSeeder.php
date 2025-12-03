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
    'id' => 21,
    'feature_id' => 5,
    'image' => 'upload/featured/x6gi1rLeS9wVcS7C39JfBpETWfJBOQBqDPlZsj2Q.png',
    'alt' => 'Digital Transformation of the Lower Judiciary',
    'deleted_at' => NULL,
    'created_at' => '2025-05-21 11:51:30',
    'updated_at' => '2025-05-21 11:51:30',
  ),
  1 => 
  array (
    'id' => 24,
    'feature_id' => 7,
    'image' => 'upload/featured/0EwTZPREyqUire1bNvXQ1vQnufx3JEbZgSXrtJ9H.png',
    'alt' => 'Real-Time Flood Monitoring Software',
    'deleted_at' => NULL,
    'created_at' => '2025-05-21 11:56:18',
    'updated_at' => '2025-05-21 11:56:18',
  ),
  2 => 
  array (
    'id' => 27,
    'feature_id' => 9,
    'image' => 'upload/featured/0StfWWGZQ2aswXQNVwNXHA31yjlZ3Y4MWjfFf0qp.jpg',
    'alt' => NULL,
    'deleted_at' => '2025-06-10 19:52:15',
    'created_at' => '2025-05-26 10:29:21',
    'updated_at' => '2025-05-26 10:29:21',
  ),
  3 => 
  array (
    'id' => 29,
    'feature_id' => 13,
    'image' => 'upload/featured/gvNhQL6TAZoDCcUcyAada01G4z0cMmbxfpIJJXQS.jpg',
    'alt' => 'Bio-Product Development for Sustainable Agriculture',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 10:42:19',
    'updated_at' => '2025-05-26 10:42:19',
  ),
  4 => 
  array (
    'id' => 30,
    'feature_id' => 14,
    'image' => 'upload/featured/7gCKdG0Y6FqyAWOaehynhFlQIE3VAU8aUynZ7Bfe.jpg',
    'alt' => 'Solar Power System Deployment at PCSIR Campuses',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 10:42:46',
    'updated_at' => '2025-05-26 10:42:46',
  ),
  5 => 
  array (
    'id' => 31,
    'feature_id' => 15,
    'image' => 'upload/featured/x5G9HKjgpAoHLtKdrVHolDD4tyeMxdbMHCE4Tjnr.jpg',
    'alt' => '100 kW Solar Power System for ASF Housing Foundation, Karachi',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 10:43:02',
    'updated_at' => '2025-05-26 10:43:02',
  ),
  6 => 
  array (
    'id' => 33,
    'feature_id' => 17,
    'image' => 'upload/featured/BiQcOsnTsehsmMVeTfzcii5Jbf2Tg1dWm390KAfI.jpg',
    'alt' => 'GPS-Based Vehicle & Container Tracking (2013)',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 10:43:33',
    'updated_at' => '2025-05-26 10:43:33',
  ),
  7 => 
  array (
    'id' => 42,
    'feature_id' => 12,
    'image' => 'upload/featured/U5Y6VIktJOkVUun9C6CNUFv0aMyRvxpKpEXj1RxS.jpg',
    'alt' => 'Deployment of Automatic Weather Stations for FWRDP – Khyber Pakhtunkhwa',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:21:46',
    'updated_at' => '2025-05-26 11:21:46',
  ),
  8 => 
  array (
    'id' => 43,
    'feature_id' => 12,
    'image' => 'upload/featured/Y7vA95AjBC2YDK8l9OY3dL1JfzpwYNa7BoZR9ZkG.jpg',
    'alt' => 'Deployment of Automatic Weather Stations for FWRDP – Khyber Pakhtunkhwa',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:22:03',
    'updated_at' => '2025-05-26 11:22:03',
  ),
  9 => 
  array (
    'id' => 45,
    'feature_id' => 6,
    'image' => 'upload/featured/agE6vj5yZ10yJXXgf2iFUoZZZBVCXj3SXmQOOfNB.jpg',
    'alt' => 'Real-Time Flow Monitoring for Punjab Irrigation Network',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:34:46',
    'updated_at' => '2025-05-26 11:34:46',
  ),
  10 => 
  array (
    'id' => 48,
    'feature_id' => 10,
    'image' => 'upload/featured/wfXcTGw0w1uSK5AXPsVEAsNqEPP6PfxKpSTcyMsI.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:39:05',
    'updated_at' => '2025-05-26 11:39:05',
  ),
  11 => 
  array (
    'id' => 49,
    'feature_id' => 10,
    'image' => 'upload/featured/XMRvYXdb72ysCGdWUg7zncg0cIZns8bNtbk9IDaA.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:39:33',
    'updated_at' => '2025-05-26 11:39:33',
  ),
  12 => 
  array (
    'id' => 50,
    'feature_id' => 16,
    'image' => 'upload/featured/QtJdCJQ3vWD1WECNRMYJujYQL8phFCkWFVv5rt7T.jpg',
    'alt' => 'Urban Surveillance System in Gilgit City (2013)',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:45:57',
    'updated_at' => '2025-05-26 11:45:57',
  ),
  13 => 
  array (
    'id' => 52,
    'feature_id' => 11,
    'image' => 'upload/featured/gUcAkWMNd21OJAedXySVtQXfl6r4udHFWJvic3q5.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:48:18',
    'updated_at' => '2025-05-26 11:48:18',
  ),
  14 => 
  array (
    'id' => 53,
    'feature_id' => 11,
    'image' => 'upload/featured/LHl60fFYmChjfSzw02fXypf2V8IwB3RJzNxC0xc5.png',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:48:50',
    'updated_at' => '2025-05-26 11:48:50',
  ),
  15 => 
  array (
    'id' => 56,
    'feature_id' => 8,
    'image' => 'upload/featured/vhD8NFXWND6a2kQBddYgLdNinFMioaxdlyui9k37.png',
    'alt' => 'Digital Transformation of Driving License Management in AJ&K',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 11:56:44',
    'updated_at' => '2025-05-26 11:56:44',
  ),
  16 => 
  array (
    'id' => 57,
    'feature_id' => 9,
    'image' => 'upload/featured/hAECiE8xPuKDlicwGzK5YiCEC9U8G7T4qjRdegFt.jpg',
    'alt' => NULL,
    'deleted_at' => '2025-06-02 19:52:03',
    'created_at' => '2025-06-03 14:46:48',
    'updated_at' => '2025-06-03 14:46:48',
  ),
  17 => 
  array (
    'id' => 58,
    'feature_id' => 9,
    'image' => 'upload/featured/5dvXYnt3FcNQQfxxs9oZRjEx9RLkwSnZknqLvbzj.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-06-03 14:51:25',
    'updated_at' => '2025-06-03 14:51:25',
  ),
  18 => 
  array (
    'id' => 59,
    'feature_id' => 18,
    'image' => 'upload/featured/D6NOez4qKE42XVyU30NE3r8nhQfGZYEf6rYzZaJV.jpg',
    'alt' => 'In nisi ut laboriosa',
    'deleted_at' => NULL,
    'created_at' => '2025-11-22 07:55:14',
    'updated_at' => '2025-11-22 07:55:14',
  ),
  19 => 
  array (
    'id' => 60,
    'feature_id' => 18,
    'image' => 'upload/featured/fZL7NxSHSuRNzAurUEveRcrSf932CMky5Dj9wzsM.jpg',
    'alt' => 'In nisi ut laboriosa',
    'deleted_at' => NULL,
    'created_at' => '2025-11-22 07:55:14',
    'updated_at' => '2025-11-22 07:55:14',
  ),
  20 => 
  array (
    'id' => 61,
    'feature_id' => 19,
    'image' => 'upload/featured/uJthtZtkQCUeSXnTqV5iqcWbN58Ar4TBDNbpPVDn.png',
    'alt' => 'meesam',
    'deleted_at' => NULL,
    'created_at' => '2025-11-29 08:03:47',
    'updated_at' => '2025-11-29 08:03:47',
  ),
  21 => 
  array (
    'id' => 62,
    'feature_id' => 20,
    'image' => 'upload/featured/e5BZGzSmvheXA0QR2MCY2Mv8kdKZrOWpbHnr3r8Z.png',
    'alt' => 'image',
    'deleted_at' => NULL,
    'created_at' => '2025-11-29 10:31:33',
    'updated_at' => '2025-11-29 10:31:33',
  ),
  22 => 
  array (
    'id' => 63,
    'feature_id' => 21,
    'image' => 'upload/featured/U7SPQwMvUc06EVrBSgHObFKpingBCm1JZJ0SO2gs.jpg',
    'alt' => 'image',
    'deleted_at' => NULL,
    'created_at' => '2025-11-29 10:40:27',
    'updated_at' => '2025-11-29 10:40:27',
  ),
  23 => 
  array (
    'id' => 64,
    'feature_id' => 22,
    'image' => 'upload/featured/7cyvfH58Rqk32bonkplIHfrKSkmbzhvB4eJqkGOS.jpg',
    'alt' => 'ttt',
    'deleted_at' => NULL,
    'created_at' => '2025-11-29 10:48:59',
    'updated_at' => '2025-11-29 10:48:59',
  ),
  24 => 
  array (
    'id' => 65,
    'feature_id' => 23,
    'image' => 'upload/featured/3kKeB9GiLwyz12na6rx8WtXnYMDI4p4KR7Mo2O4W.png',
    'alt' => 'zzz',
    'deleted_at' => NULL,
    'created_at' => '2025-12-02 12:51:06',
    'updated_at' => '2025-12-02 12:51:06',
  ),
  25 => 
  array (
    'id' => 66,
    'feature_id' => 24,
    'image' => 'upload/featured/e26VKQ0XcCiJrRNXVD7daoR5ZxzOfnNiKpZ7dlf7.png',
    'alt' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-02 13:25:00',
    'updated_at' => '2025-12-02 13:25:00',
  ),
  26 => 
  array (
    'id' => 67,
    'feature_id' => 25,
    'image' => 'upload/featured/WgxUpDLzWEPEH9S0MIeKmSXN7R5FVGXOXTypEEbQ.png',
    'alt' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-02 13:33:29',
    'updated_at' => '2025-12-02 13:33:29',
  ),
  27 => 
  array (
    'id' => 68,
    'feature_id' => 26,
    'image' => 'upload/featured/yUBNf2dMJfzzGSoHnpmKynOJoxCeWAU6OZdBn6Uf.png',
    'alt' => 'alt',
    'deleted_at' => NULL,
    'created_at' => '2025-12-03 07:04:53',
    'updated_at' => '2025-12-03 07:04:53',
  ),
  28 => 
  array (
    'id' => 69,
    'feature_id' => 27,
    'image' => 'upload/featured/ImvWQ7lEgZxRjGYY8aab6Jw7cBjayaTMoFlgE2Hs.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-03 18:01:51',
    'updated_at' => '2025-12-03 18:01:51',
  ),
  29 => 
  array (
    'id' => 70,
    'feature_id' => 28,
    'image' => 'upload/featured/62I1YBX317Jd0GYSYbULu1X8UyELWNIOW2it9wxU.jpg',
    'alt' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-03 18:12:01',
    'updated_at' => '2025-12-03 18:12:01',
  ),
);
        DB::table('cd_feature_images')->insert($data);
    }
}
