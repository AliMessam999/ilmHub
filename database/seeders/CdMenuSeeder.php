<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdMenuSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_menus' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'order' => NULL,
    'title' => 'Home',
    'icon' => '<i class="fa fa-home"></i>',
    'deleted_at' => '2025-05-14 16:24:21',
    'created_at' => '2023-11-22 10:52:44',
    'updated_at' => '2025-05-14 16:24:21',
  ),
  1 => 
  array (
    'id' => 2,
    'order' => 2,
    'title' => 'Divisions',
    'icon' => '<i class="fa fa-cogs"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:53:54',
    'updated_at' => '2025-08-12 16:02:07',
  ),
  2 => 
  array (
    'id' => 3,
    'order' => 3,
    'title' => 'Resources',
    'icon' => '<i class="fa fa-server"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:55:09',
    'updated_at' => '2025-08-12 16:02:12',
  ),
  3 => 
  array (
    'id' => 4,
    'order' => NULL,
    'title' => 'Gallery',
    'icon' => '<i class="fa fa-file-image-o"></i>',
    'deleted_at' => '2025-05-14 16:24:08',
    'created_at' => '2023-11-22 10:56:01',
    'updated_at' => '2025-05-14 16:24:08',
  ),
  4 => 
  array (
    'id' => 5,
    'order' => NULL,
    'title' => 'Careers',
    'icon' => '<i class="fa fa-briefcase"></i>',
    'deleted_at' => '2025-05-14 16:24:12',
    'created_at' => '2023-11-22 10:56:41',
    'updated_at' => '2025-05-14 16:24:12',
  ),
  5 => 
  array (
    'id' => 6,
    'order' => 4,
    'title' => 'About Us',
    'icon' => '<i class="fa fa-user"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:57:24',
    'updated_at' => '2025-08-12 16:02:18',
  ),
  6 => 
  array (
    'id' => 7,
    'order' => NULL,
    'title' => 'NEWS & BLOGS',
    'icon' => '<i class="fa fa-file-image-o"></i>',
    'deleted_at' => '2025-05-14 16:24:17',
    'created_at' => '2023-11-22 10:58:09',
    'updated_at' => '2025-05-14 16:24:17',
  ),
  7 => 
  array (
    'id' => 8,
    'order' => NULL,
    'title' => 'Resources',
    'icon' => '<i class="fa fa-icon"></i>',
    'deleted_at' => '2025-05-14 16:18:02',
    'created_at' => '2025-05-14 16:17:32',
    'updated_at' => '2025-05-14 16:18:02',
  ),
  8 => 
  array (
    'id' => 9,
    'order' => NULL,
    'title' => 'mines',
    'icon' => '<i class="fa fa-icon"></i>',
    'deleted_at' => '2025-05-14 16:52:59',
    'created_at' => '2025-05-14 16:51:11',
    'updated_at' => '2025-05-14 16:52:59',
  ),
  9 => 
  array (
    'id' => 12,
    'order' => 1,
    'title' => 'Home',
    'icon' => 'icon',
    'deleted_at' => NULL,
    'created_at' => '2025-08-12 16:02:35',
    'updated_at' => '2025-11-06 11:08:59',
  ),
);
        DB::table('cd_menus')->insert($data);
    }
}
