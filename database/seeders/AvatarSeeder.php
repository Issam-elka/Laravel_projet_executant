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
                'nom' => 'femme',
                'src' => 'femme.jpg',
                
            ]
        ]);
    }
}
