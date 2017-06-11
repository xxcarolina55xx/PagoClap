<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 */
class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'idusuario';

	public $timestamps = false;

    protected $fillable = [
        'pasword',
        'usuario',
        'tipoUsers_idtipoUsers'
    ];

    protected $guarded = [];

        public function TipoUser()
    {
        return $this->hasOne('Cinema\Models\TipoUser','idtipoUsers');
    }
}