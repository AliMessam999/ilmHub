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
    'title' => 'Home',
    'icon' => '<i class="fa fa-home"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:52:44',
    'updated_at' => '2023-11-22 05:52:44',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Solutions',
    'icon' => '<i class="fa fa-cogs"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:53:54',
    'updated_at' => '2023-11-22 05:53:54',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Services',
    'icon' => '<i class="fa fa-server"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:55:09',
    'updated_at' => '2023-11-22 05:55:09',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Gallery',
    'icon' => '<i class="fa fa-file-image-o"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:56:01',
    'updated_at' => '2023-11-22 05:56:01',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Careers',
    'icon' => '<i class="fa fa-briefcase"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:56:41',
    'updated_at' => '2023-11-22 05:56:41',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'About Us',
    'icon' => '<i class="fa fa-user"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:57:24',
    'updated_at' => '2023-11-22 05:57:24',
  ),
  6 => 
  array (
    'id' => 7,
    'title' => 'NEWS & BLOGS',
    'icon' => '<i class="fa fa-file-image-o"></i>',
    'deleted_at' => NULL,
    'created_at' => '2023-11-22 05:58:09',
    'updated_at' => '2023-11-22 05:58:09',
  ),
);
        DB::table('cd_menus')->insert($data);
    }
}
