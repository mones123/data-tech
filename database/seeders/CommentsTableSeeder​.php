<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comments::factory()->count(10)->create();
    }
}
