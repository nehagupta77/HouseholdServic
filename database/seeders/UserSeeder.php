<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('12345678'); // common password for all users

        $users = [
            ['name' => 'User One', 'email' => 'user1@example.com'],
            ['name' => 'User Two', 'email' => 'user2@example.com'],
            ['name' => 'User Three', 'email' => 'user3@example.com'],
            ['name' => 'User Four', 'email' => 'user4@example.com'],
            ['name' => 'User Five', 'email' => 'user5@example.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'first_name' => $user['name'],
                'last_name' => 'test',
                'email' => $user['email'],
                'password' => $password,
            ]);
        }
    }
}
