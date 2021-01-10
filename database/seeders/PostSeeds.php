<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <= 10; $i++) {
            DB::table('posts')->insert([
                'user_id' => rand(1, 10),
                'category_id' => rand(1, 10),
                'title' => Str::random(10),
                'body' => Str::random(500)
            ]);
        }
    }
}
