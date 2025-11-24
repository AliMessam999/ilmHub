<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdFaqSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_faqs' table
        $data = array (
  0 => 
  array (
    'id' => 9,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'meesam',
    'deleted_at' => '2025-11-22 11:21:49',
    'created_at' => NULL,
    'updated_at' => '2025-11-22 11:21:49',
  ),
  1 => 
  array (
    'id' => 10,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'meesam',
    'deleted_at' => '2025-11-22 11:22:40',
    'created_at' => NULL,
    'updated_at' => '2025-11-22 11:22:40',
  ),
  2 => 
  array (
    'id' => 11,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'shaheer',
    'deleted_at' => '2025-11-22 11:22:40',
    'created_at' => NULL,
    'updated_at' => '2025-11-22 11:22:40',
  ),
  3 => 
  array (
    'id' => 12,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'daniyal',
    'deleted_at' => '2025-11-22 11:22:40',
    'created_at' => NULL,
    'updated_at' => '2025-11-22 11:22:40',
  ),
  4 => 
  array (
    'id' => 13,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'meesam',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 14,
    'title' => 'ali',
    'sub_category_id' => 15,
    'description' => 'shaheer',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 => 
  array (
    'id' => 15,
    'title' => 'faq1',
    'sub_category_id' => 78,
    'description' => 'hhhhh',
    'deleted_at' => '2025-11-24 05:36:48',
    'created_at' => NULL,
    'updated_at' => '2025-11-24 05:36:48',
  ),
  7 => 
  array (
    'id' => 16,
    'title' => 'faq2',
    'sub_category_id' => 78,
    'description' => 'hhhhhhh',
    'deleted_at' => '2025-11-24 05:36:48',
    'created_at' => NULL,
    'updated_at' => '2025-11-24 05:36:48',
  ),
  8 => 
  array (
    'id' => 17,
    'title' => 'faq1',
    'sub_category_id' => 78,
    'description' => 'hhhhh',
    'deleted_at' => '2025-11-24 05:47:08',
    'created_at' => NULL,
    'updated_at' => '2025-11-24 05:47:08',
  ),
  9 => 
  array (
    'id' => 18,
    'title' => 'faq2',
    'sub_category_id' => 78,
    'description' => 'hhhhhhh',
    'deleted_at' => '2025-11-24 05:47:08',
    'created_at' => NULL,
    'updated_at' => '2025-11-24 05:47:08',
  ),
  10 => 
  array (
    'id' => 19,
    'title' => 'faq1',
    'sub_category_id' => 78,
    'description' => 'hhhhh',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  11 => 
  array (
    'id' => 20,
    'title' => 'faq2',
    'sub_category_id' => 78,
    'description' => 'hhhhhhh',
    'deleted_at' => NULL,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);
        DB::table('cd_faqs')->insert($data);
    }
}
