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
        $this->call([
            UserSeeder::class,
            SpeakerSeeder::class,
            TopicSeeder::class,
            LectureSeeder::class,
            LectureTopicSeeder::class,
        ]);
    }
}
