<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($x = 0; $x <=5; $x++){
            DB::table('contents')->insert([
                'user_id' => 1,
                'title' => $faker->name,
                'content' => Str::random(100),
                'image' => Str::random(5) . '.png',
                'post_time' => now()
            ]);
        }

        sleep(1);

        for ($x = 0; $x <=5; $x++){
            DB::table('contents')->insert([
                'user_id' => 2,
                'title' => $faker->name,
                'content' => Str::random(100),
                'image' => Str::random(5) . '.png',
                'post_time' => now()
            ]);
        }
    }
}
