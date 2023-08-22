<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuário extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'nome' => 'João',
            'email' => 'teste@gmail.vom',
            'senha' => '123456',
            'cpf' => '12345678910',
            'telefone' => '12345678910',
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Maria',
            'email' => 'teste2@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'telefone' => '12345678910',
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'José',
            'email' => 'teste3@gmai.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'telefone' => '12345678910',
        ]);
        DB::table('usuarios')->insert([
            'nome' => 'Pedro',
            'email' => 'teste4@gmail.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'telefone' => '12345678910',
        ]);

        DB::table('usuarios')->insert([
            'nome' => 'Paulo',
            'email' => 'teste5@gmai.com',
            'senha' => '123456',
            'cpf' => '12345678910',
            'telefone' => '12345678910',
        ]);
    }
}
