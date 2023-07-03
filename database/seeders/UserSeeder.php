<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
            'name' => 'Allen A Mgeyekwa',
            'email' => 'a@gmail.com',
            'reg_no'=> '2020-04-06832',
            'department' =>'COMPUTER SCIENCE AND ENGINEERING',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ],
        [
            'name' => 'Valence Kapinga',
            'email' => 'v@gmail.com',
            'reg_no'=> '2020-04-07831',
            'department' =>'COMPUTER SCIENCE AND ENGINEERING',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'), // password
            'remember_token' => Str::random(10),
        ],
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
