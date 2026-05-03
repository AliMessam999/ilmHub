<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpeakerSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'speakers' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Mufti Menk',
    'image' => NULL,
    'bio' => 'Ismail ibn Musa Menk, also known as Mufti Menk, is a Muslim cleric from Zimbabwe and head of the country\'s fatwa department.',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Nouman Ali Khan',
    'image' => NULL,
    'bio' => 'Nouman Ali Khan is an American Muslim speaker and Arabic scholar who founded the Bayyinah Institute for Arabic and Qur\'anic Studies.',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  2 => 
  array (
    'id' => 3,
    'name' => 'Omar Suleiman',
    'image' => NULL,
    'bio' => 'Omar Suleiman is an American Islamic scholar, civil rights activist, writer, and public speaker.',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  3 => 
  array (
    'id' => 4,
    'name' => 'Yasir Qadhi',
    'image' => NULL,
    'bio' => 'Yasir Qadhi is a Pakistani-American Muslim scholar and theologian.',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:42:08',
  ),
  4 => 
  array (
    'id' => 5,
    'name' => 'Ali Messam',
    'image' => 'speakers/bzMHNYYUilfy3RCzMhtlKIjPx3km4dICeygN8v09.jpg',
    'bio' => 'Nill',
    'created_at' => '2026-05-03 15:44:41',
    'updated_at' => '2026-05-03 15:44:41',
  ),
  5 => 
  array (
    'id' => 6,
    'name' => 'Nadir Hssnain',
    'image' => NULL,
    'bio' => NULL,
    'created_at' => '2026-05-03 15:50:52',
    'updated_at' => '2026-05-03 15:50:52',
  ),
);

        foreach ($data as $item) {
            if ('speakers' === 'lecture_topic') {
                DB::table('speakers')->updateOrInsert(
                    ['lecture_id' => $item['lecture_id'], 'topic_id' => $item['topic_id']],
                    $item
                );
            } else {
                DB::table('speakers')->updateOrInsert(['id' => $item['id']], $item);
            }
        }
    }
}
