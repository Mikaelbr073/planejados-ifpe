<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'DataInicialDoProjeto',
        'DataDeEntrega',
        'statusDeProdução',
        'cidade',
        'rua',
        'numero',
        'uf'
    ];

    public function cliente(){
        return $this->belongsTo(cliente::class);
    }

}
