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
    'division' => NULL,
    'description' => '<p>Description here</p>',
    'alt' => 'pic',
    'image' => 'upload/team_member/9E9SkjfxCvChBG2WdYQfH0FZJho4sRHHfHaf6bK8.png',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 12:21:48',
    'updated_at' => '2025-11-17 09:22:36',
    'category_id' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Syed Imran Ali',
    'designation' => 'Director',
    'division' => '',
    'description' => '<p>Description here</p>',
    'alt' => 'Syed Imran Ali',
    'image' => 'upload/team_member/uPFvG8TXC1JTSIRiAVK96Z8ERr3QvmsAS5ECG2I4.png',
    'deleted_at' => '2025-05-26 16:47:55',
    'created_at' => '2023-11-23 12:23:15',
    'updated_at' => '2025-05-26 16:47:55',
    'category_id' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Zain Ali',
    'designation' => 'Chief Technology Officer',
    'division' => '',
    'description' => '<p>Description here</p>',
    'alt' => 'Zain Ali',
    'image' => 'upload/team_member/lzKJIT3MXTRqM4yEGcbOwqlZYICLlu1OUdEOfR8P.png',
    'deleted_at' => '2025-05-26 16:48:01',
    'created_at' => '2023-11-23 12:24:15',
    'updated_at' => '2025-05-26 16:48:01',
    'category_id' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Riaz Hussain',
    'designation' => 'GM BD',
    'division' => '/divisions/renewable-energy, /divisions/security-systems',
    'description' => '<p>tes</p>',
    'alt' => 'Riaz Hussain',
    'image' => 'upload/team_member/edgT5kmaDgJDm0SEzpSFWJJycfBkr0amnjHknTQD.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:44:55',
    'updated_at' => '2025-11-17 09:49:14',
    'category_id' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Sibtain Bashir',
    'designation' => 'GM Tech',
    'division' => '/divisions/hydromet',
    'description' => '<p>v</p>',
    'alt' => 'Sibtain Bashir',
    'image' => 'upload/team_member/R7dNqJYj1VGJmFbaBh7zgwYxbsP9829aOoYyYsgX.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:45:29',
    'updated_at' => '2025-11-17 11:00:58',
    'category_id' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'Rasool Khan',
    'designation' => 'GM Admin & Finance',
    'division' => '',
    'description' => '<p>test</p>',
    'alt' => 'Rasool Khan',
    'image' => 'upload/team_member/EYhMolhoYOtp6sKnoZBRjeSXb0GwbJgIQoRr3qDt.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:46:06',
    'updated_at' => '2025-05-26 17:02:43',
    'category_id' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'name' => 'Quratulain Malik',
    'designation' => 'HOD',
    'division' => '/divisions/biotechnology, /divisions/mining-minerals',
    'description' => '<p>test</p>',
    'alt' => 'Quratulain Malik',
    'image' => 'upload/team_member/5ww4lOoDKnuAzjljsBa3bzm0dm9b3cuVaN4trdFm.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-15 12:46:41',
    'updated_at' => '2025-11-17 09:49:39',
    'category_id' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'name' => 'Shams-ur-Rahman',
    'designation' => 'Solution Engineer',
    'division' => '',
    'description' => '<p>test</p>',
    'alt' => 'Shams-ur-Rahman',
    'image' => 'upload/career/6uBGtJtdj9bg7xbnvktcc5UtMkYVQIurdAbJZVVY.png',
    'deleted_at' => '2025-05-26 16:57:58',
    'created_at' => '2025-05-15 12:47:14',
    'updated_at' => '2025-05-26 16:57:58',
    'category_id' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'name' => 'Babar Jahangir',
    'designation' => 'HOD Software',
    'division' => '/divisions/ict',
    'description' => '<p>cy</p>',
    'alt' => 'Babar Jehangir',
    'image' => 'upload/team_member/NiiveAtxy1zmANDFUg9dUlt7GIQHvoyCbDWQFBLu.png',
    'deleted_at' => NULL,
    'created_at' => '2025-05-26 17:08:32',
    'updated_at' => '2025-11-17 09:46:00',
    'category_id' => NULL,
  ),
);
        DB::table('cd_team_members')->insert($data);
    }
}
