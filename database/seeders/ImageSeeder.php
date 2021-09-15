<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'src' => '1.jpg',
                'categorie_id' => 2,
                
            ],
            [
                'src' => '3.jpg',
                'categorie_id' => 3,
                
            ],
            [
                'src' => '4.jpg',
                'categorie_id' => 3,
                
            ],
            [
                'src' => '5.jpg',
                'categorie_id' => 7,
                
            ],
            [
                'src' => '6.jpg',
                'categorie_id' => 7,
                
            ],
            [
                'src' => '8.jpg',
                'categorie_id' => 1,
                
            ],
            [
                'src' => '9.jpg',
                'categorie_id' => 4,
                
            ],
            [
                'src' => '10.jpg',
                'categorie_id' => 5,
                
            ],
        ]);
    }
}
