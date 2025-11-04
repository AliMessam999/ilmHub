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
            'name' => "Azhar Khan",
            'email' => "azhar@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('secret'), // password
            'remember_token' => 'tOkEn',
        ], [
            'name' => "Adeel Tariq",
            'email' => "adeel@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('secret'), // password
            'remember_token' => 'tOkEn',
        ],
    ];
        $users = User::insert($users);
    }
}
