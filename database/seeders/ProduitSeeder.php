<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produit::create([
            'libelle' => 'Mouton Ladoom',
            'image' => 'https://m.facebook.com/diawmouhamadoulamine/?locale=fr_FR',
            'prix' => 800000,
            'description' => 'moutons ladoum hauteur: 1m poids: 400kg',
            'date_ajout' => '2022-08-12',
            'categorie_id' =>1,
           

        ]);
    }
}
