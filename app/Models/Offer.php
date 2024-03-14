<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'preco',
        'cor',
        'quilometragem',
        'placa',
        'cidade',
        'fotos',
        'dataCadastro',
        'visualizacoes',
    ];
}
