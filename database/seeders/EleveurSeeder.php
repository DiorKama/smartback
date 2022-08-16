<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EleveurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('eleveurs')->insert([
            'localisation' => 'Mbour Croisement Saly',
            'cni' => '4364645788959',
            'user_id' => 1,
        ]);
        DB::table('eleveurs')->insert([
            'localisation' => 'Yeumbeul',
            'cni' => '2445783649045',
            'user_id' => 2,
        ]);
    }
}
