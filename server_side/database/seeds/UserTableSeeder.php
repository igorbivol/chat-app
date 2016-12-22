<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = [
        	'name' => 'Igor Bivol',
        	'email' => 'igor.bivol1@gmail.com',
        	'password' => Hash::make('password')
        ];

        User::create($user1);
    }
}
