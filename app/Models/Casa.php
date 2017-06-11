<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Casa
 */
class Casa extends Model
{
    protected $table = 'casa';

    public $timestamps = false;

    protected $fillable = [
        'idcasa',
        'Ncasa',
        'Nfamilias',
        'calle_idcalle'
    ];

    protected $guarded = [];

public function Calle()
    {
        return $this->hasOne('Cinema\Models\Calle','idcalle');
    }

}