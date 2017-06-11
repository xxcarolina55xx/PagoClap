<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Family
 */
class Family extends Model
{
    protected $table = 'family';

    protected $primaryKey = 'idfamilia';

	public $timestamps = false;

    protected $fillable = [
        'nombreFamilia',
        'casa_idcasa',
        'habitantes_idhabitantes'
    ];

    protected $guarded = [];

     public function Casa()
    {
        return $this->hasMany('Cinema\Models\Casa');
    }

       public function Habitantes()
    {
        return $this->hasMany('Cinema\Models\Casa');
    }

        
}