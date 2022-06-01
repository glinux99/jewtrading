<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([
            'nom_agent' => 'Daniel',
            'prenom_agent' => 'Kikimba',
            'num_agent' => '+243970912428',
            'email_agent' => 'genesiskikimba@gmail.com',
            'adresse_agent' => 'Av Keshero, Q. Keshero',
            'fonction' => 'admin'
        ]);
    }
}
