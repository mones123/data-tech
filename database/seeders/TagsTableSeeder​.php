<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tags::factory()->count(10)->create();
    }
}
