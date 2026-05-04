<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'topics' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Tafsir',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Seerah',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Marriage',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Hereafter',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Spirituality',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'History',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
);

        foreach ($data as $item) {
            if ('topics' === 'lecture_topic') {
                DB::table('topics')->updateOrInsert(
                    ['lecture_id' => $item['lecture_id'], 'topic_id' => $item['topic_id']],
                    $item
                );
            } else {
                DB::table('topics')->updateOrInsert(['id' => $item['id']], $item);
            }
        }
    }
}
