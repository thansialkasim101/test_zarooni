<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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

    protected $table = "employee";

    public function emp()
    {
        return $this->hasOne('App\Models\Route');
    }
   
   
    
}
