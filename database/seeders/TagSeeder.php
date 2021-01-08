<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert(
          [
            'name' => 'Absurd'
          ],
          [
            'name' => 'Hukum'
          ],
          [
            'name' => 'Kartun'
          ],
          [
            'name' => 'Kesehatan'
          ],
          [
            'name' => 'Makanan'
          ],
          [
            'name' => 'Pembunuhan'
          ],
          [
            'name' => 'Penculikan'
          ],
          [
            'name' => 'Pendidikan'
          ],
          [
            'name' => 'Permainan'
          ],
          [
            'name' => 'Selebriti'
          ],
          [
            'name' => 'Teknologi'
          ],
        );
    }
}
