<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LikesTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Likes::factory()->count(10)->create();
    }
}
