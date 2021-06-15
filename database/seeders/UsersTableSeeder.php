<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Instructeur',
            'email' => 'Instructeur@gmail.com',
            'password' => bcrypt('pass@instructeur'),
        ]);
        
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Etudiant',
            'email' => 'Etudiant@gmail.com',
            'password' => bcrypt('pass@etudiant'),
        ]);
    }
}
