<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('User123'),
                'type' => 'admin'
            ],
            [
                'first_name' => 'Kate',
                'last_name' => 'Mill',
                'email' => 'kate@example.com',
                'password' => bcrypt('User123'),
                'type' => 'teacher'
            ],
            [
                'first_name' => 'Jessie',
                'last_name' => 'Rain',
                'email' => 'jessie@example.com',
                'password' => bcrypt('User123'),
                'type' => 'teacher'
            ],
            [
                'first_name' => 'Brian',
                'last_name' => 'Green',
                'email' => 'brian@example.com',
                'password' => bcrypt('User123'),
                'type' => 'student'
            ],
        ];

        DB::table('users')->insert($users);
    }
}
