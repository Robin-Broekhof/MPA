<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//add to seed pages
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
        DB::table('users')->insert(
            [
                
            ]);
    }
}