<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'dj'),
             'email' => env('SEEDER_USER_EMAIL', 'keliix06@gmail.com'),
             'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
         ]);
    }
}
