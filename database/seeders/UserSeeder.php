<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Seed data for the 'users' table
        $data = array (
  0 => 
  array (
    'id' => 1,
    'name' => 'Muhammad Baqir',
    'email' => 'mbaqir@gmail.com',
    'email_verified_at' => '2026-05-02 17:56:14',
    'password' => '$2y$12$XqvyHN.bX9swwSf09ba7eOVf/qRyXg0OPztT261XK5K4M1XFHlk3i',
    'phone_num' => NULL,
    'remember_token' => 'tOkEn',
    'created_at' => '2026-05-02 17:56:15',
    'updated_at' => '2026-05-02 17:56:15',
  ),
  1 => 
  array (
    'id' => 2,
    'name' => 'Ali Messam',
    'email' => 'messam@gmail.com',
    'email_verified_at' => '2026-05-02 17:56:14',
    'password' => '$2y$12$71AeggO0Mj3N7j0jA22xHeuEeDVTr4EE2rBXBKOUFK2Cogi/9IhV6',
    'phone_num' => NULL,
    'remember_token' => 'NjMabDy2oM16g5UDgsrqEHHicXvUzWFgJT54Urg3fAZ5qFCyit3DeZsZlwB2',
    'created_at' => '2026-05-02 17:56:15',
    'updated_at' => '2026-05-02 17:56:15',
  ),
);

        foreach ($data as $item) {
            if ('users' === 'lecture_topic') {
                DB::table('users')->updateOrInsert(
                    ['lecture_id' => $item['lecture_id'], 'topic_id' => $item['topic_id']],
                    $item
                );
            } else {
                DB::table('users')->updateOrInsert(['id' => $item['id']], $item);
            }
        }
    }
}
