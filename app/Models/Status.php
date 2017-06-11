<?php

namespace Cinema\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Status
 */
class Status extends Model
{
    protected $table = 'status';

    protected $primaryKey = 'idstatus';

	public $timestamps = false;

    protected $fillable = [
        'status'
    ];

    protected $guarded = [];

        
}