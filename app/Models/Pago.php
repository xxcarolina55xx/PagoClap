<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 */
class Pago extends Model
{
    protected $table = 'Pago';

    protected $primaryKey = 'idPago';

	public $timestamps = false;

    protected $fillable = [
        'NumeroPago',
        'status_idstatus',
        'bolsaC_idbolsaC',
        'bolsaC_familia_idfamilia',
        'family_idfamilia',
        'TipoPago_idTipoPago'
    ];

    protected $guarded = [];

        
}