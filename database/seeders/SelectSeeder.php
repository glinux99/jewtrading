<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SelectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Select::factory(1000)->create();
    }
}
