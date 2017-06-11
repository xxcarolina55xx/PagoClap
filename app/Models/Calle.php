<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calle
 */
class Calle extends Model
{
    protected $table = 'calle';

    public $timestamps = false;

    protected $fillable = [
        'idcalle',
        'Ncasas',
        'Nomcalle',
        'sector_idsector'
    ];

    protected $guarded = [];

        public function Sector()
    {
        return $this->hasOne('Cinema\Models\Sector','idsector');
    }
}