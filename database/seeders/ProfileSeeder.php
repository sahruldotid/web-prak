<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'education' => 'CMU',
            'skill' => "Hack",
            'bio' => "Hi im regular user",
            'gender' => 'M',
            'profile_pic' => '/etc/passwd',
        ]);
    }
}
