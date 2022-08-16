<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'libelle' => 'Moutons',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Boeufs',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Chèvres',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Volailles',
        ]);
        DB::table('categories')->insert([
            'libelle' => 'Produits',
        ]);
    }
}
