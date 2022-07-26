<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listings')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10).'@gmail.com',
            'tags' =>  Str::random(10),
            'logo' =>  Str::random(10),
            'location' =>  Str::random(10),
       
            'user_id' => '1',
        ]);
    }
}
