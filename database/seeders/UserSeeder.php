<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'user@mail.com',
            'role' => "user",
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'consultant@mail.com',
            'role' => "consultant",
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@mail.com',
            'role' => "admin",
            'password' => Hash::make('password'),
        ]);
    }
}
