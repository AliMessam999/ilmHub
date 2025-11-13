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
    'title' => 'Financial Sector',
    'sort' => 1,
    'alt' => 'Financial Sector',
    'description' => NULL,
    'image' => 'upload/partner/6Sdbef2RFTp1Vw9TLVAXQaa5S5oNIHQEz93uShof.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:21',
    'updated_at' => '2025-06-03 10:11:22',
    'link' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Govt. Establishments',
    'sort' => 2,
    'alt' => 'Govt. Establishments',
    'description' => NULL,
    'image' => 'upload/client/EsXaW0d7FPQ6E4l9P2msBxFSMWGe4aCX7Pf37v5Y.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:48:50',
    'updated_at' => '2025-06-03 10:12:48',
    'link' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Healthcare Sector',
    'sort' => 3,
    'alt' => 'Healthcare Sector',
    'description' => NULL,
    'image' => 'upload/partner/BJpGOr0CPFdvX5KCFGwKvAu0ZuaFx2Cvat59xjik.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:05',
    'updated_at' => '2025-06-03 10:11:38',
    'link' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Educational Institutions',
    'sort' => 4,
    'alt' => 'Educational Institutions',
    'description' => NULL,
    'image' => 'upload/partner/59XOb1nrOKYvEIIrdEn1j5u3aJKtBQWkAMqlgfds.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:28',
    'updated_at' => '2025-05-15 11:49:28',
    'link' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Defence Sector',
    'sort' => 5,
    'alt' => 'Defence Sector',
    'description' => NULL,
    'image' => 'upload/partner/3QwX4HFSwh3CtReXkfwKLHFHDGej5TRsQgR3gPQD.jpg',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:49:45',
    'updated_at' => '2025-05-15 11:49:45',
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
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 11:50:00',
    'updated_at' => '2025-05-15 11:50:00',
    'link' => NULL,
  ),
);
        DB::table('cd_clients')->insert($data);
    }
}
