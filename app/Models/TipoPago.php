<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPago
 */
class TipoPago extends Model
{
    protected $table = 'TipoPago';

    protected $primaryKey = 'idTipoPago';

	public $timestamps = false;

    protected $fillable = [
        'MetodoP'
    ];

    protected $guarded = [];

        
}