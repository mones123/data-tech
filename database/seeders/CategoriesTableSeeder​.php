<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Categories::factory()->count(10)->create();
    }
}
