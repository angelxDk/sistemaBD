<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuário extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'cpf',
        'telefone'
    ];
    public function enderecos()
    {
        return $this->hasMany(Endereço::class);
    }
    public function contas()
    {
        return $this->hasMany(Conta::class);
    }
}
