<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeriesTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Series::factory()->count(10)->create();
    }
}
