<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonsTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Seasons::factory()->count(10)->create();
    }
}
