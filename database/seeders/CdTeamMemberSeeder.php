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
    'designation' => 'Company CEO',
    'description' => '<p>Description here</p>',
    'alt' => 'pic',
    'image' => 'upload/career/N5aFZa0BsjphDJCgXhfGgRkEz3Tbo8aGjFckgOOy.jpg',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:21:48',
    'updated_at' => '2023-11-23 07:21:48',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Riaz Hussain',
    'designation' => 'GM Projects',
    'description' => '<p>Description here</p>',
    'alt' => 'pic',
    'image' => 'upload/career/o11swwNoZqQBWvus8efSuCWDDU2XvKtvPlP0oZfD.jpg',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:23:15',
    'updated_at' => '2023-11-23 07:23:15',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Babar Jehangir',
    'designation' => 'HOD Software',
    'description' => '<p>Description here</p>',
    'alt' => 'pic',
    'image' => 'upload/career/sZuUZVmzFQv0KKknOfAxdi68Kw2D4i0l2ZyUCZPY.jpg',
    'deleted_at' => NULL,
    'created_at' => '2023-11-23 07:24:15',
    'updated_at' => '2023-11-23 07:24:15',
  ),
);
        DB::table('cd_team_members')->insert($data);
    }
}
