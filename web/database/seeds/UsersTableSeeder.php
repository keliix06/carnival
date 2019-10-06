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
        // Admins
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin1'),
            'email' => env('SEEDER_USER_EMAIL', 'admin1@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin2'),
            'email' => env('SEEDER_USER_EMAIL', 'admin2@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin3'),
            'email' => env('SEEDER_USER_EMAIL', 'admin3@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin4'),
            'email' => env('SEEDER_USER_EMAIL', 'admin4@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin5'),
            'email' => env('SEEDER_USER_EMAIL', 'admin5@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin6'),
            'email' => env('SEEDER_USER_EMAIL', 'admin6@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin7'),
            'email' => env('SEEDER_USER_EMAIL', 'admin7@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'admin8'),
            'email' => env('SEEDER_USER_EMAIL', 'admin8@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'abc123!!'))),
            'role' => User::ROLE_ADMIN,
        ]);

        // Checkout
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout1'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout1@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout2'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout2@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout3'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout3@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout4'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout4@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout5'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout5@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout6'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout6@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout7'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout7@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout8'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout8@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout9'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout9@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout10'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout10@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout11'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout11@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
        factory(User::class)->create([
            'name' => env('SEEDER_USER_NAME', 'checkout12'),
            'email' => env('SEEDER_USER_EMAIL', 'checkout12@carnival.local'),
            'password' => Hash::make((env('SEEDER_USER_PASSWORD', 'xyz789@@'))),
            'role' => User::ROLE_CHECKOUT,
        ]);
    }
}
