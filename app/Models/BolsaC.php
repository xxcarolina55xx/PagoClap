<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BolsaC
 */
class BolsaC extends Model
{
    protected $table = 'bolsaC';

    public $timestamps = false;

    protected $fillable = [
        'idbolsaC',
        'Rubros',
        'PrecioR',
        'PrecioT',
        'CantidadB',
        'correo',
        'familia_idfamilia'
    ];

    protected $guarded = [];

        
}