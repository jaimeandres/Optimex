<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Jaime Berrazueta',
        	'email' => 'jaime.berrazueta@udla.edu.ec',
        	'password' => Hash::make('1234567'),
            'rol' => '99',
        	'remember_token' => str_random(10)
        ]);
    }
}
