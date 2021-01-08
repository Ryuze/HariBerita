<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          [
            'name' => 'budi setiawan',
            'email' => 'admin@admin.com',
            'password' => Hash::make('asdqwe123')
          ],
          [
            'name' => 'Bude',
            'email' => 'b@u.de',
            'password' => Hash::make('budebude')
          ]
        ]);
    }
}
