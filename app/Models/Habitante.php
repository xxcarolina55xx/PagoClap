<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Habitante
 */
class Habitante extends Model
{
    protected $table = 'habitantes';

    protected $primaryKey = 'idhabitantes';

	public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'cedula',
        'edad',
        'usuario_idusuario'
    ];

    protected $guarded = [];

        
}