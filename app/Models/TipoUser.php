<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUser
 */
class TipoUser extends Model
{
    protected $table = 'tipoUsers';

    protected $primaryKey = 'idtipoUsers';

	public $timestamps = false;

    protected $fillable = [
        'tipoUsers'
    ];

    protected $guarded = [];

        
}