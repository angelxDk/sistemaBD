<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Endereço extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enderecos')->insert([
            'rua' => 'Rua 1',
            'numero' => '123',
            'bairro' => 'Bairro 1',
            'cidade' => 'Cidade 1',
            'estado' => 'Estado 1',
            'cep' => '12345678',
            'complemento' => 'Complemento 1',
            'usuario_id' => '1'
        ]);
        DB::table('enderecos')->insert([
            'rua' => 'Rua 2',
            'numero' => '1234',
            'bairro' => 'Bairro 1',
            'cidade' => 'Cidade 1',
            'estado' => 'Estado 1',
            'cep' => '12345678',
            'complemento' => 'Complemento 1',
            'usuario_id' => '2'
        ]);
        DB::table('enderecos')->insert([
            'rua' => 'Rua 3',
            'numero' => '1235',
            'bairro' => 'Bairro 1',
            'cidade' => 'Cidade 1',
            'estado' => 'Estado 1',
            'cep' => '12345678',
            'complemento' => 'Complemento 1',
            'usuario_id' => '3'
        ]);
        DB::table('enderecos')->insert([
            'rua' => 'Rua 4',
            'numero' => '1236',
            'bairro' => 'Bairro 1',
            'cidade' => 'Cidade 1',
            'estado' => 'Estado 1',
            'cep' => '12345678',
            'complemento' => 'Complemento 1',
            'usuario_id' => '4'
        ]);
        DB::table('enderecos')->insert([
            'rua' => 'Rua 5',
            'numero' => '1237',
            'bairro' => 'Bairro 1',
            'cidade' => 'Cidade 1',
            'estado' => 'Estado 1',
            'cep' => '12345678',
            'complemento' => 'Complemento 1',
            'usuario_id' => '5'
        ]);
    }
}
