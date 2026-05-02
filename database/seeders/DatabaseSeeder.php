<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Speaker;
use App\Models\Topic;
use App\Models\Lecture;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Speakers
        $speakers = [
            Speaker::create(['name' => 'Mufti Menk', 'bio' => 'Ismail ibn Musa Menk, also known as Mufti Menk, is a Muslim cleric from Zimbabwe and head of the country\'s fatwa department.']),
            Speaker::create(['name' => 'Nouman Ali Khan', 'bio' => 'Nouman Ali Khan is an American Muslim speaker and Arabic scholar who founded the Bayyinah Institute for Arabic and Qur\'anic Studies.']),
            Speaker::create(['name' => 'Omar Suleiman', 'bio' => 'Omar Suleiman is an American Islamic scholar, civil rights activist, writer, and public speaker.']),
            Speaker::create(['name' => 'Yasir Qadhi', 'bio' => 'Yasir Qadhi is a Pakistani-American Muslim scholar and theologian.']),
        ];

        // Topics
        $topics = [
            Topic::create(['name' => 'Tafsir']),
            Topic::create(['name' => 'Seerah']),
            Topic::create(['name' => 'Marriage']),
            Topic::create(['name' => 'Hereafter']),
            Topic::create(['name' => 'Spirituality']),
            Topic::create(['name' => 'History']),
        ];

        // Lectures
        $lectureData = [
            [
                'title' => 'The Story of Prophet Musa (AS)',
                'description' => 'A detailed explanation of the life of Prophet Musa (AS) and the lessons we can learn from his struggles.',
                'speaker_id' => $speakers[0]->id,
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', // Placeholder
                'language' => 'English',
                'date' => '2023-01-15',
                'topics' => [$topics[1]->id, $topics[5]->id],
            ],
            [
                'title' => 'Understanding Surah Al-Kahf',
                'description' => 'Tafsir of Surah Al-Kahf and its relevance in protecting us from the trials of the modern world.',
                'speaker_id' => $speakers[1]->id,
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'language' => 'English',
                'date' => '2023-05-20',
                'topics' => [$topics[0]->id, $topics[4]->id],
            ],
            [
                'title' => 'Keys to a Successful Marriage',
                'description' => 'Islamic principles for maintaining a healthy and spiritually uplifting marriage.',
                'speaker_id' => $speakers[0]->id,
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'language' => 'English',
                'date' => '2023-08-10',
                'topics' => [$topics[2]->id],
            ],
            [
                'title' => 'Journey of the Soul',
                'description' => 'What happens after we pass away? A comprehensive look at the afterlife according to Quran and Sunnah.',
                'speaker_id' => $speakers[2]->id,
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'language' => 'English',
                'date' => '2023-11-05',
                'topics' => [$topics[3]->id, $topics[4]->id],
            ],
            [
                'title' => 'Lessons from the Battle of Badr',
                'description' => 'Historical analysis and spiritual reflections on the first major battle in Islam.',
                'speaker_id' => $speakers[3]->id,
                'video_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
                'language' => 'English',
                'date' => '2024-02-18',
                'topics' => [$topics[1]->id, $topics[5]->id],
            ],
        ];

        foreach ($lectureData as $data) {
            $topicIds = $data['topics'];
            unset($data['topics']);
            
            $lecture = Lecture::create($data);
            $lecture->topics()->sync($topicIds);
        }
    }
}
