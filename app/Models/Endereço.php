<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereço extends Model
{
    use HasFactory;
    protected $table = 'enderecos';
    protected $fillable = [
        'rua',
        'numero',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'complemento'
    ];
    public function usuario()
    {
        return $this->belongsTo(Usuário::class);
    }
}
