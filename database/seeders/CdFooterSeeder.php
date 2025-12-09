<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFooterSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_footers' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 12,
    'category_id' => NULL,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:30:02',
    'updated_at' => '2025-12-04 09:35:09',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Let’s Mine Together With Sustainability',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:32:03',
    'updated_at' => '2025-12-05 05:23:33',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Ready To Elevate Safety And Compliance?',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => 115,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:33:34',
    'updated_at' => '2025-12-05 06:22:14',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Ready to modernize? Let\'s make it happen',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => NULL,
    'deleted_at' => '2025-12-02 04:53:10',
    'created_at' => '2025-12-01 12:36:35',
    'updated_at' => '2025-12-02 04:53:10',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Building Truly Reliable Infrastructure',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:39:43',
    'updated_at' => '2025-12-05 05:04:22',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Ready to Modernize? Let\'s Make It Happen',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => 81,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:52:48',
    'updated_at' => '2025-12-05 05:29:21',
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'Let\'s Architect A Strategy That Sets You Apart',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => 82,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:53:59',
    'updated_at' => '2025-12-05 05:31:02',
  ),
  7 => 
  array (
    'id' => 8,
    'title' => 'Secure Your Future',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => 83,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:55:13',
    'updated_at' => '2025-12-05 05:32:26',
  ),
  8 => 
  array (
    'id' => 9,
    'title' => 'Strong Infrastructure Begins With Us',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => 84,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:56:33',
    'updated_at' => '2025-12-05 05:36:16',
  ),
  9 => 
  array (
    'id' => 10,
    'title' => 'Ready To Validate Your Systems?',
    'menu_id' => 2,
    'category_id' => 1,
    'sub_category_id' => 85,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:57:35',
    'updated_at' => '2025-12-05 05:34:21',
  ),
  10 => 
  array (
    'id' => 11,
    'title' => 'Let’s Build Your Next Solution Together',
    'menu_id' => 2,
    'category_id' => 2,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 12:58:37',
    'updated_at' => '2025-12-05 05:11:53',
  ),
  11 => 
  array (
    'id' => 12,
    'title' => 'Ready To Lead The Digital Revolution?',
    'menu_id' => 2,
    'category_id' => 2,
    'sub_category_id' => 86,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:00:50',
    'updated_at' => '2025-12-05 05:37:38',
  ),
  12 => 
  array (
    'id' => 13,
    'title' => 'Transform Your Business Operations',
    'menu_id' => 2,
    'category_id' => 2,
    'sub_category_id' => 87,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:02:28',
    'updated_at' => '2025-12-05 05:39:09',
  ),
  13 => 
  array (
    'id' => 14,
    'title' => 'Ready To Unlock Intelligent Automation?',
    'menu_id' => 2,
    'category_id' => 2,
    'sub_category_id' => 88,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:03:56',
    'updated_at' => '2025-12-05 05:40:18',
  ),
  14 => 
  array (
    'id' => 15,
    'title' => 'Ready To Build Something Exceptional?',
    'menu_id' => 2,
    'category_id' => 2,
    'sub_category_id' => 89,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:05:07',
    'updated_at' => '2025-12-05 05:41:17',
  ),
  15 => 
  array (
    'id' => 16,
    'title' => 'Let’s Talk Hydromet Solutions',
    'menu_id' => 2,
    'category_id' => 3,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:07:04',
    'updated_at' => '2025-12-05 05:14:52',
  ),
  16 => 
  array (
    'id' => 17,
    'title' => 'Ready To Master Water Management?',
    'menu_id' => 2,
    'category_id' => 3,
    'sub_category_id' => 90,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:09:05',
    'updated_at' => '2025-12-05 05:43:47',
  ),
  17 => 
  array (
    'id' => 18,
    'title' => 'Ready For Weather Intelligence That Works?',
    'menu_id' => 2,
    'category_id' => 3,
    'sub_category_id' => 91,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:10:12',
    'updated_at' => '2025-12-05 05:44:47',
  ),
  18 => 
  array (
    'id' => 19,
    'title' => 'Ready To Protect Your Water Resources?',
    'menu_id' => 2,
    'category_id' => 3,
    'sub_category_id' => 93,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:10:55',
    'updated_at' => '2025-12-05 05:46:34',
  ),
  19 => 
  array (
    'id' => 20,
    'title' => 'Ready To Cultivate Smarter?',
    'menu_id' => 2,
    'category_id' => 3,
    'sub_category_id' => 92,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:12:16',
    'updated_at' => '2025-12-05 05:45:38',
  ),
  20 => 
  array (
    'id' => 21,
    'title' => 'Connect for Advanced Biotech Solutions',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:13:43',
    'updated_at' => '2025-12-05 05:17:47',
  ),
  21 => 
  array (
    'id' => 22,
    'title' => 'Ready To Engineer Biological Innovation?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 94,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:16:19',
    'updated_at' => '2025-12-05 05:56:04',
  ),
  22 => 
  array (
    'id' => 23,
    'title' => 'Ready To Scale Your Bioprocess?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 95,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:17:55',
    'updated_at' => '2025-12-05 05:56:55',
  ),
  23 => 
  array (
    'id' => 24,
    'title' => 'Ready To Purify With Precision?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 96,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:19:22',
    'updated_at' => '2025-12-05 05:57:38',
  ),
  24 => 
  array (
    'id' => 25,
    'title' => 'Ready to Industrialize Your Innovation?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 97,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:20:15',
    'updated_at' => '2025-12-05 06:00:14',
  ),
  25 => 
  array (
    'id' => 26,
    'title' => 'Ready To Elevate Your Lab Capabilities?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 98,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:21:08',
    'updated_at' => '2025-12-05 06:01:03',
  ),
  26 => 
  array (
    'id' => 27,
    'title' => 'Ready To Partner For Innovation?',
    'menu_id' => 2,
    'category_id' => 4,
    'sub_category_id' => 99,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:22:03',
    'updated_at' => '2025-12-05 06:01:58',
  ),
  27 => 
  array (
    'id' => 28,
    'title' => 'Let’s Power A Cleaner, Brighter Future Together',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => 100,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:27:33',
    'updated_at' => '2025-12-05 06:02:53',
  ),
  28 => 
  array (
    'id' => 29,
    'title' => 'Ready To Optimize Your Renewable Assets?',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => 101,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:28:40',
    'updated_at' => '2025-12-05 06:04:08',
  ),
  29 => 
  array (
    'id' => 30,
    'title' => 'Empowering Your Clean Energy Ambitions',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => 102,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:29:30',
    'updated_at' => '2025-12-05 06:05:25',
  ),
  30 => 
  array (
    'id' => 31,
    'title' => 'Ready To Find Your Perfect Solar Solution?',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => 103,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:30:37',
    'updated_at' => '2025-12-05 06:07:05',
  ),
  31 => 
  array (
    'id' => 32,
    'title' => 'Ready To See Security Differently?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 104,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:33:06',
    'updated_at' => '2025-12-05 06:08:41',
  ),
  32 => 
  array (
    'id' => 33,
    'title' => 'Ready To Control Access Intelligently?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 105,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:34:24',
    'updated_at' => '2025-12-05 06:09:40',
  ),
  33 => 
  array (
    'id' => 34,
    'title' => 'Ready To Fortify Your Defenses?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 106,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:35:30',
    'updated_at' => '2025-12-05 06:10:49',
  ),
  34 => 
  array (
    'id' => 35,
    'title' => 'Ready To Elevate Fire Safety?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 107,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:36:26',
    'updated_at' => '2025-12-05 06:11:42',
  ),
  35 => 
  array (
    'id' => 36,
    'title' => 'Ready To Amplify Your Communication?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 108,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:37:07',
    'updated_at' => '2025-12-05 06:12:55',
  ),
  36 => 
  array (
    'id' => 37,
    'title' => 'Ready To Strengthen Your Security Screening?',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 109,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:37:52',
    'updated_at' => '2025-12-05 06:13:50',
  ),
  37 => 
  array (
    'id' => 38,
    'title' => 'Let\'s Track Smarter Together',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 110,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:38:49',
    'updated_at' => '2025-12-05 06:14:43',
  ),
  38 => 
  array (
    'id' => 39,
    'title' => 'Let\'s Map Your Mineral Potential',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => 112,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:40:44',
    'updated_at' => '2025-12-05 06:18:21',
  ),
  39 => 
  array (
    'id' => 40,
    'title' => 'Ready To Automate Your Mining Operations?',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => 113,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:41:40',
    'updated_at' => '2025-12-05 06:19:17',
  ),
  40 => 
  array (
    'id' => 41,
    'title' => 'Ready to elevate safety and compliance? Let\'s monitor what matters.',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => 115,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:42:40',
    'updated_at' => '2025-12-01 13:42:40',
  ),
  41 => 
  array (
    'id' => 42,
    'title' => 'Ready To Optimize Your Mineral Processing?',
    'menu_id' => 2,
    'category_id' => 77,
    'sub_category_id' => 114,
    'deleted_at' => NULL,
    'created_at' => '2025-12-01 13:43:26',
    'updated_at' => '2025-12-05 06:20:34',
  ),
  42 => 
  array (
    'id' => 43,
    'title' => 'Ready to power the future with solar?',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => 100,
    'deleted_at' => NULL,
    'created_at' => '2025-12-02 06:17:59',
    'updated_at' => '2025-12-02 06:17:59',
  ),
  43 => 
  array (
    'id' => 44,
    'title' => 'Build confidence with technology that protects, detects, and responds',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-02 06:25:40',
    'updated_at' => '2025-12-02 06:25:40',
  ),
  44 => 
  array (
    'id' => 45,
    'title' => 'Build confidence with technology that protects, detects, and responds',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => NULL,
    'deleted_at' => '2025-12-02 06:32:42',
    'created_at' => '2025-12-02 06:31:50',
    'updated_at' => '2025-12-02 06:32:42',
  ),
  45 => 
  array (
    'id' => 46,
    'title' => 'zzz',
    'menu_id' => 2,
    'category_id' => 5,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 05:19:40',
    'updated_at' => '2025-12-05 05:19:40',
  ),
  46 => 
  array (
    'id' => 47,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 3,
    'category_id' => 52,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 05:24:52',
    'updated_at' => '2025-12-05 05:24:52',
  ),
  47 => 
  array (
    'id' => 48,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 3,
    'category_id' => 53,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 05:25:45',
    'updated_at' => '2025-12-05 05:25:45',
  ),
  48 => 
  array (
    'id' => 49,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 6,
    'category_id' => 51,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 05:27:13',
    'updated_at' => '2025-12-05 05:27:13',
  ),
  49 => 
  array (
    'id' => 50,
    'title' => 'Connect With Security Experts',
    'menu_id' => 2,
    'category_id' => 6,
    'sub_category_id' => 111,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 06:16:48',
    'updated_at' => '2025-12-05 06:16:48',
  ),
  50 => 
  array (
    'id' => 51,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 6,
    'category_id' => 14,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-05 06:40:10',
    'updated_at' => '2025-12-05 06:40:10',
  ),
  51 => 
  array (
    'id' => 52,
    'title' => 'Your Next Digital Step Starts Here',
    'menu_id' => 14,
    'category_id' => NULL,
    'sub_category_id' => NULL,
    'deleted_at' => NULL,
    'created_at' => '2025-12-09 06:02:24',
    'updated_at' => '2025-12-09 06:02:24',
  ),
);
        DB::table('cd_footers')->insert($data);
    }
}
