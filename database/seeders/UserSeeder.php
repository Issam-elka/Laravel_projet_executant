<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Admin',
            'prenom' => 'Admin',
            'age' => 23,
            'avatar_id' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'role_id' => '1'
            ],
            [
            'name' => 'User',
            'prenom' => 'User',
            'age' => 23,
            'avatar_id' => 2,
            'email' => 'user@user.com',
            'password' => Hash::make('admin'),
            'role_id' => '2'
            ],
        ]);
    }
}
