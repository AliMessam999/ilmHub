<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LectureSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'lectures' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'title' => 'The Story of Prophet Musa (AS)',
    'description' => 'A detailed explanation of the life of Prophet Musa (AS) and the lessons we can learn from his struggles.',
    'speaker_id' => 1,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2023-01-15',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:47:42',
  ),
  1 => 
  array (
    'id' => 2,
    'title' => 'Understanding Surah Al-Kahf',
    'description' => 'Tafsir of Surah Al-Kahf and its relevance in protecting us from the trials of the modern world.',
    'speaker_id' => 2,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2023-05-20',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:47:51',
  ),
  2 => 
  array (
    'id' => 3,
    'title' => 'Keys to a Successful Marriage',
    'description' => 'Islamic principles for maintaining a healthy and spiritually uplifting marriage.',
    'speaker_id' => 1,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2023-08-10',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:48:00',
  ),
  3 => 
  array (
    'id' => 4,
    'title' => 'Journey of the Soul',
    'description' => 'What happens after we pass away? A comprehensive look at the afterlife according to Quran and Sunnah.',
    'speaker_id' => 3,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2023-11-05',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:48:09',
  ),
  4 => 
  array (
    'id' => 5,
    'title' => 'Lessons from the Battle of Badr',
    'description' => 'Historical analysis and spiritual reflections on the first major battle in Islam.',
    'speaker_id' => 4,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2024-02-18',
    'created_at' => '2026-05-03 15:42:08',
    'updated_at' => '2026-05-03 15:48:17',
  ),
  5 => 
  array (
    'id' => 6,
    'title' => 'Devine Pearl',
    'description' => NULL,
    'speaker_id' => 6,
    'video_url' => 'https://www.youtube.com/watch?v=aSaV12KNIQc',
    'language' => 'English',
    'date' => '2026-05-03',
    'created_at' => '2026-05-03 15:51:41',
    'updated_at' => '2026-05-03 15:51:41',
  ),
);

        foreach ($data as $item) {
            if ('lectures' === 'lecture_topic') {
                DB::table('lectures')->updateOrInsert(
                    ['lecture_id' => $item['lecture_id'], 'topic_id' => $item['topic_id']],
                    $item
                );
            } else {
                DB::table('lectures')->updateOrInsert(['id' => $item['id']], $item);
            }
        }
    }
}
