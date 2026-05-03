<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureTopicSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'lecture_topic' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'lecture_id' => 1,
    'topic_id' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  1 => 
  array (
    'id' => 2,
    'lecture_id' => 1,
    'topic_id' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  2 => 
  array (
    'id' => 3,
    'lecture_id' => 2,
    'topic_id' => 1,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  3 => 
  array (
    'id' => 4,
    'lecture_id' => 2,
    'topic_id' => 5,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  4 => 
  array (
    'id' => 5,
    'lecture_id' => 3,
    'topic_id' => 3,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  5 => 
  array (
    'id' => 6,
    'lecture_id' => 4,
    'topic_id' => 4,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  6 => 
  array (
    'id' => 7,
    'lecture_id' => 4,
    'topic_id' => 5,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  7 => 
  array (
    'id' => 8,
    'lecture_id' => 5,
    'topic_id' => 2,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  8 => 
  array (
    'id' => 9,
    'lecture_id' => 5,
    'topic_id' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
  9 => 
  array (
    'id' => 10,
    'lecture_id' => 6,
    'topic_id' => 6,
    'created_at' => NULL,
    'updated_at' => NULL,
  ),
);

        foreach ($data as $item) {
            if ('lecture_topic' === 'lecture_topic') {
                DB::table('lecture_topic')->updateOrInsert(
                    ['lecture_id' => $item['lecture_id'], 'topic_id' => $item['topic_id']],
                    $item
                );
            } else {
                DB::table('lecture_topic')->updateOrInsert(['id' => $item['id']], $item);
            }
        }
    }
}
