<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sector
 */
class Sector extends Model
{
    protected $table = 'sector';

    protected $primaryKey = 'idsector';

	public $timestamps = false;

    protected $fillable = [
        'nomsector',
        'Nsector'
    ];

    protected $guarded = [];

        
}