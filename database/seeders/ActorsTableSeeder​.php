<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActorsTableSeederâ€‹ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Actors::factory()->count(10)->create();
    }
}
