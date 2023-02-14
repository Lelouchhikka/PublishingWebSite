<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'email'=>'erasyl.kelman@gmail.com',
            'password'=>Hash::make('>v,;JHJ:s^"3d#A@')
        ]);
        DB::table('about_us')->insert([
            'description'=>'Hello'
        ]);
    }
}
