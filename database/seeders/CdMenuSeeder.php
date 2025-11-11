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
    'id' => 2,
    'order' => 3,
    'title' => 'Divisions',
    'icon' => '<i class="fa fa-cogs"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:53:54',
    'updated_at' => '2025-11-10 10:23:08',
    'slug' => '#',
  ),
  1 => 
  array (
    'id' => 3,
    'order' => 5,
    'title' => 'Resources',
    'icon' => '<i class="fa fa-server"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:55:09',
    'updated_at' => '2025-11-10 10:44:54',
    'slug' => '#',
  ),
  2 => 
  array (
    'id' => 6,
    'order' => 6,
    'title' => 'About Us',
    'icon' => '<i class="fa fa-user"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 10:57:24',
    'updated_at' => '2025-11-10 10:58:08',
    'slug' => '/about_us',
  ),
  3 => 
  array (
    'id' => 12,
    'order' => 1,
    'title' => 'Home',
    'icon' => '<i class="fa fa-home"></i>',
    'deleted_at' => NULL,
    'created_at' => '2025-08-12 16:02:35',
    'updated_at' => '2025-11-10 10:32:09',
    'slug' => '/',
  ),
  4 => 
  array (
    'id' => 14,
    'order' => 4,
    'title' => 'Industries',
    'icon' => 'icon',
    'deleted_at' => NULL,
    'created_at' => '2025-11-06 11:27:05',
    'updated_at' => '2025-11-11 05:08:14',
    'slug' => '/industry',
  ),
);
        DB::table('cd_menus')->insert($data);
    }
}
