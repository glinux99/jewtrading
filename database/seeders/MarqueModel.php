<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueModel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marque_models')->insert([
            'marque' => "",
            'model' => "",
            'marque_value' => " ",
            'model_value' => "",
        ]);
    }
}
