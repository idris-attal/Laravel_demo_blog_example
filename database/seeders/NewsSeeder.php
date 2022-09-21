<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 15; $i++) {
            DB::table('news')->insert([
                'title' => Str::random(10),
                'text' => Str::random(10),
                'user_id' => 2
            ]);
        }
    }
}
