<?php

namespace Database\Seeders;

use App\Models\Select;
use Illuminate\Database\Seeder;

class SelectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Select::factory(200)->create();
    }
}
