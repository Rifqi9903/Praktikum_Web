<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username'=>'rifqi990',
            'name' => 'rifqi',
            'email' => 'rifqim0'.'@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('rr900'),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
