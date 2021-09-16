<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            [
                'nom' => 'Homme',
                'src' => 'homme.jpg',
                
            ],
            [
                'nom' => 'Anonyme',
                'src' => 'anonyme.jpg',
                
            ],
            [
                'nom' => 'Femme',
                'src' => 'femme.jpg',
            ],
            [
                'nom' => 'RRHH',
                'src' => 'femme2.jpg',
            ],
        ]);
    }
}
