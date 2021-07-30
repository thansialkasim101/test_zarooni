<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    /**
     * guarded variable
     *
     * @var array
     */
    protected $guarded = [];
    /**
     * $table variable
     *
     * @var string
     */

    protected $table = "route";

    public function salesman_summary()
    {
        return $this->hasOne('App\Models\Transation');
            
            
     
    }
}
