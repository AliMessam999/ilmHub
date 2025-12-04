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
    'description' => '<p>test</p>',
    'image' => 'upload/client/QtY6berAN1doKincT8gjpYq4lAfZnvzbl4xduWvN.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:21',
    'updated_at' => '2025-12-04 06:58:24',
    'link' => 'test',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Education',
    'sort' => 2,
    'alt' => 'Education',
    'description' => NULL,
    'image' => 'upload/client/5daigT4j1Ji5HblYnBb73akRycDw5VdQ6B2aXEyr.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:50',
    'updated_at' => '2025-12-04 06:58:47',
    'link' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Utilities / Environment',
    'sort' => 3,
    'alt' => 'Utilities / Environment',
    'description' => NULL,
    'image' => 'upload/client/GhmoISwAuZoEMk86tohvUCOb0JgFCqzM9IMy7dbD.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:05',
    'updated_at' => '2025-12-04 06:59:14',
    'link' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Defence & Law Enforcements',
    'sort' => 4,
    'alt' => 'Defence & Law Enforcements',
    'description' => NULL,
    'image' => 'upload/client/dd8CH2Qq9EZL5sYmc73XGfwUdmnshhmwTz7KZOnp.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:28',
    'updated_at' => '2025-12-04 07:14:54',
    'link' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Private Enterprises',
    'sort' => 5,
    'alt' => 'Private Enterprises',
    'description' => NULL,
    'image' => 'upload/client/M7GQYudTop0zJhAqMSRaG7Nl7V3bfCZTTTYzefxa.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:45',
    'updated_at' => '2025-12-04 07:15:56',
    'link' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Law Enforcement',
    'sort' => 6,
    'alt' => 'Law Enforcement',
    'description' => NULL,
    'image' => 'upload/partner/ND9ugaiPnPa5vTNnlfjAZkVVyqRjC1CYr24JDSSk.jpg',
    'deleted_at' => '2025-11-11 11:14:10',
    'created_at' => '2025-05-15 11:50:00',
    'updated_at' => '2025-11-11 11:14:10',
    'link' => NULL,
  ),
);
        DB::table('cd_clients')->insert($data);
    }
}
