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
        $user2 = [
            'name' => 'Igor Mardari',
            'email' => 'igor.mardari96@gmail.com',
            'password' => Hash::make('test123')
        ];
        $user3 = [
            'name' => 'Bar',
            'email' => 'bar@gmail.com',
            'password' => Hash::make('test123')
        ];

        User::create($user1);
        User::create($user2);
        User::create($user3);
    }
}