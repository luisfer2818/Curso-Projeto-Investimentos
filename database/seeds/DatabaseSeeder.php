<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'         => '00000000000',
            'name'        => 'Luis',
            'phone'       => '6100000000',
            'birth'       => '1980-10-01',
            'gender'      => 'M',
            'email'       => 'luis@sistema.com.br',
            'password'    =>  env('PASSWORD_HASH') ? bcrypt('123456') : '123456',         
        
        ]);

        User::create([
            'cpf' => '11111111111',
            'name' => 'Fernando',
            'phone' => '6111111111',
            'birth' => '1980-10-31',
            'gender' => 'M',
            'email' => 'luis1@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '22222222222',
            'name' => 'Luis Fernando',
            'phone' => '6122222222',
            'birth' => '1980-10-21',
            'gender' => 'M',
            'email' => 'luis2@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '33333333333',
            'name' => 'Luis Silva',
            'phone' => '6133333333',
            'birth' => '1980-10-11',
            'gender' => 'M',
            'email' => 'luis3@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '44444444444',
            'name' => 'Luis Oliveira',
            'phone' => '6144444444',
            'birth' => '1980-10-11',
            'gender' => 'M',
            'email' => 'luis4@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '55555555555',
            'name' => 'Luis Frances',
            'phone' => '6155555555',
            'birth' => '1980-10-11',
            'gender' => 'M',
            'email' => 'luis5@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '66666666666',
            'name' => 'Luis Camargo',
            'phone' => '6166666666',
            'birth' => '1980-10-11',
            'gender' => 'M',
            'email' => 'luis6@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
