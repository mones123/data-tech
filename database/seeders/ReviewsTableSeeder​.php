<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Reviews::factory()->count(10)->create();
    }
}
