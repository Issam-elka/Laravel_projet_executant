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
                'nom' => 'homme',
                'src' => 'homme.jpg',
                
            ],
            [
                'nom' => 'anonyme',
                'src' => 'dKMeZaCoW7v5YKnStB34FIV8vX6GrLFkWMqqSXXx.jpg',
                
            ],
            [
                'nom' => 'Dev',
                'src' => 'dev.jpg',
            ],
            [
                'nom' => 'RRHH',
                'src' => 'femme2.jpg',
            ],
        ]);
    }
}
