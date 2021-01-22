<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($id = 1; $id <= 6; $id++){
            DB::table('content_tags')->insert([
                'content_id' => $id,
                'tag_name' => 'Makanan'
            ]);
        }

        for ($id = 7; $id <= 12; $id++){
            DB::table('content_tags')->insert([
                'content_id' => $id,
                'tag_name' => 'Kartun'
            ]);
        }
    }
}
