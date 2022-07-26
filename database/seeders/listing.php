<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class listing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 
        DB::table('listings')->insert([
            'title' => Str::random(1000),
            'description' => Str::random(1000).'@gmail.com',
            'tags' =>  Str::random(100),
            'logo' =>  Str::random(100),
            'location' =>  Str::random(100),
            'user_id' =>  Str::random(100),
        ]);
 
    }
}
