<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $users = [
            [
            'name' => "Muhammad Baqir",
            'email' => "mbaqir@gmail.com",
            'email_verified_at' => now(),
            'password' => 'secret', // password
            'remember_token' => 'tOkEn',
        ], [
            'name' => "Ali Messam",
            'email' => "messam@gmail.com",
            'email_verified_at' => now(),
            'password' => 'secret', // password
            'remember_token' => 'tOkEn',
        ],
    ];
        foreach ($users as $userData) {
            User::create($userData);
        }
    }
}
