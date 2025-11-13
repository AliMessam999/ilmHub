<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdClientSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_clients' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'Healthcare',
    'sort' => 1,
    'alt' => 'Healthcare',
    'image' => 'upload/client/Lxe54vMlCZrtwGpKjA1FIDMbgaPWd3EelS0RvsN1.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:21',
    'updated_at' => '2025-11-11 11:00:50',
    'link' => 'test',
    'description' => '<p>test</p>',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Education',
    'sort' => 2,
    'alt' => 'Education',
    'image' => 'upload/client/GzFuKMmHWAthKxBcB5CQ5TgeqIKU3bW3rLPTvXbT.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:50',
    'updated_at' => '2025-11-11 11:01:23',
    'link' => NULL,
    'description' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Utilities / Environment',
    'sort' => 3,
    'alt' => 'Utilities / Environment',
    'image' => 'upload/client/0S1Hp6XMVTWdMM5wveonrfFDzWXoX3PYDxvydiwP.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:05',
    'updated_at' => '2025-11-11 11:02:37',
    'link' => NULL,
    'description' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Defence & Law Enforcements',
    'sort' => 4,
    'alt' => 'Defence & Law Enforcements',
    'image' => 'upload/client/kX0tTJwcJGnVCXkZmzjVqVszacwPd2jPBe9Ox4nB.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:28',
    'updated_at' => '2025-11-11 11:03:44',
    'link' => NULL,
    'description' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Private Enterprises',
    'sort' => 5,
    'alt' => 'Private Enterprises',
    'image' => 'upload/client/Wo5p0eWMPN4SPaMV2rQKC9BNU2xFRF4ojdX3PfVl.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:45',
    'updated_at' => '2025-11-11 11:04:28',
    'link' => NULL,
    'description' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Law Enforcement',
    'sort' => 6,
    'alt' => 'Law Enforcement',
    'image' => 'upload/partner/ND9ugaiPnPa5vTNnlfjAZkVVyqRjC1CYr24JDSSk.jpg',
    'deleted_at' => '2025-11-11 11:14:10',
    'created_at' => '2025-05-15 11:50:00',
    'updated_at' => '2025-11-11 11:14:10',
    'link' => NULL,
    'description' => NULL,
  ),
);
        DB::table('cd_clients')->insert($data);
    }
}
