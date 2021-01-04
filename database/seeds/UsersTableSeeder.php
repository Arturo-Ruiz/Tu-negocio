<?php

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
        App\User::create([
            'name' => 'Giovani',
            'email' => 'giovani.metalvitrina@gmail.com',
            'password' => bcrypt('Zeus80858084'),
            'role' => 'Administrador',
        ]);
    }
}

