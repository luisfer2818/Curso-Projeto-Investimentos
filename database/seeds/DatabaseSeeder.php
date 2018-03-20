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
            'cpf'         => '11223122222',
            'name'        => 'João',
            'phone'       => '999999999',
            'birth'       => '1980-10-01',
            'gender'      => 'M',
            'email'       => 'joao1@sistema.com.br',
            'password'    =>  env('PASSWORD_HASH') ? bcrypt('123456') : '123456',         
        
        ]);

        // $this->call(UsersTableSeeder::class);
    }
}
