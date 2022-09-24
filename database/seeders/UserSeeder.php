<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(["name"=>"admin", "prenom"=>"Adama", "email"=>"admin@gmail.com", "password"=>bcrypt("Passer1234"), "telephone"=>"77 219 34 60", "adresse"=>"Mbour", "cni"=>"2536536346", "role_id"=>3]);
    }
}
