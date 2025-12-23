<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CdTeamMemberSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'cd_team_members' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Muhammad Ahsan Bashir',
    'designation' => 'Chief Executive',
    'description' => '<p>Description here</p>',
    'alt' => 'pic',
    'image' => 'upload/team_member/ma6CewwwmuUdwGYij3BX553AowMRHeeAIjh4AG4y.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:21:48',
    'updated_at' => '2025-12-20 10:02:25',
    'category_id' => NULL,
    'division' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Syed Imran Ali',
    'designation' => 'Director',
    'description' => '<p>Description here</p>',
    'alt' => 'Syed Imran Ali',
    'image' => 'upload/team_member/uPFvG8TXC1JTSIRiAVK96Z8ERr3QvmsAS5ECG2I4.png',
    'deleted_at' => '2025-05-26 16:47:55',
    'created_at' => '2023-11-23 12:23:15',
    'updated_at' => '2025-05-26 16:47:55',
    'category_id' => NULL,
    'division' => '',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Zain Ali',
    'designation' => 'Chief Technology Officer',
    'description' => '<p>Description here</p>',
    'alt' => 'Zain Ali',
    'image' => 'upload/team_member/lzKJIT3MXTRqM4yEGcbOwqlZYICLlu1OUdEOfR8P.png',
    'deleted_at' => '2025-05-26 16:48:01',
    'created_at' => '2023-11-23 12:24:15',
    'updated_at' => '2025-05-26 16:48:01',
    'category_id' => NULL,
    'division' => '',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Riaz Hussain',
    'designation' => 'GM BD',
    'description' => '<p>tes</p>',
    'alt' => 'Riaz Hussain',
    'image' => 'upload/team_member/kfVhyL9djd3a85nbjgEVtKU3Mq7NWIbGB8MyF2MG.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:44:55',
    'updated_at' => '2025-12-20 10:03:03',
    'category_id' => NULL,
    'division' => '/divisions/renewable-energy, /divisions/security-systems',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Sibtain Bashir',
    'designation' => 'GM Tech',
    'description' => '<p>v</p>',
    'alt' => 'Sibtain Bashir',
    'image' => 'upload/team_member/3gTYzYAAct0v3B5TXvD1dv7vfLgmJEBoybaedDgO.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:45:29',
    'updated_at' => '2025-12-20 10:03:25',
    'category_id' => NULL,
    'division' => '/divisions/hydromet',
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'Rasool Khan',
    'designation' => 'GM Admin & Finance',
    'description' => '<p>test</p>',
    'alt' => 'Rasool Khan',
    'image' => 'upload/team_member/ImnD3T1kfTFI1pJwJWslFGwq2dLAjLH3Hbx6ni6J.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:46:06',
    'updated_at' => '2025-12-20 10:03:45',
    'category_id' => NULL,
    'division' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'name' => 'Quratulain Malik',
    'designation' => 'HOD',
    'description' => '<p>test</p>',
    'alt' => 'Quratulain Malik',
    'image' => 'upload/team_member/TJEzvXMKWehzplU2NDGekdv0Ti9AudwkaVgEi7n7.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:46:41',
    'updated_at' => '2025-12-20 10:04:05',
    'category_id' => NULL,
    'division' => '/divisions/biotechnology, /divisions/mining-minerals',
  ),
  7 => 
  array (
    'id' => 8,
    'name' => 'Shams-ur-Rahman',
    'designation' => 'Solution Engineer',
    'description' => '<p>test</p>',
    'alt' => 'Shams-ur-Rahman',
    'image' => 'upload/career/6uBGtJtdj9bg7xbnvktcc5UtMkYVQIurdAbJZVVY.png',
    'deleted_at' => '2025-05-26 16:57:58',
    'created_at' => '2025-05-15 12:47:14',
    'updated_at' => '2025-05-26 16:57:58',
    'category_id' => NULL,
    'division' => '',
  ),
  8 => 
  array (
    'id' => 9,
    'name' => 'Babar Jahangir',
    'designation' => 'HOD Software',
    'description' => '<p>cy</p>',
    'alt' => 'Babar Jehangir',
    'image' => 'upload/team_member/u7nhFGsyATJIxrMj4no4OvN9RpKAZvdzlEoGb8PA.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 17:08:32',
    'updated_at' => '2025-12-20 10:04:25',
    'category_id' => NULL,
    'division' => '/divisions/it-infrastructure, /divisions/software-solutions',
  ),
);
        DB::table('cd_team_members')->insert($data);
    }
}
