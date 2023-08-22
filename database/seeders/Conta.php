<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Conta extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contas')->insert([
            'nome' => 'João',
            'email' => 'teste@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'usuario_id' => '1'
        ]);
        DB::table('contas')->insert([
            'nome' => 'Maria',
            'email' => 'teste2@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'usuario_id' => '2'
        ]);
        DB::table('contas')->insert([
            'nome' => 'José',
            'email' => 'teste3@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'usuario_id' => '3'
        ]);
        DB::table('contas')->insert([
            'nome' => 'Pedro',
            'email' => 'teste4@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'usuario_id' => '4'
        ]);
        DB::table('contas')->insert([
            'nome' => 'Paulo',
            'email' => 'teste5@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'usuario_id' => '5'
        ]);

    }
}
