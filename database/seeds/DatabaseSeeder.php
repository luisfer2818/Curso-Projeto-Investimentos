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
            'phone'       => '0001112222',
            'birth'       => '1980-10-01',
            'gender'      => 'M',
            'email'       => 'luis@sistema.com.br',
            'password'    =>  env('PASSWORD_HASH') ? bcrypt('123456') : '123456',         
        
        ]);

        User::create([
            'cpf' => '00000100000',
            'name' => 'Luis',
            'phone' => '0001112222',
            'birth' => '1980-10-31',
            'gender' => 'M',
            'email' => 'luis1@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '00000002000',
            'name' => 'Luis',
            'phone' => '0001112222',
            'birth' => '1980-10-21',
            'gender' => 'M',
            'email' => 'luis2@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        User::create([
            'cpf' => '00000030000',
            'name' => 'Luis',
            'phone' => '0001112222',
            'birth' => '1980-10-11',
            'gender' => 'M',
            'email' => 'luis3@sistema.com.br',
            'password' => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',

        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
