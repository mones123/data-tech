<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoviesTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Movies::factory()->count(10)->create();
    }
}
