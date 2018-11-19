<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table='nasabah';
    public function rekening()
    {
    	return $this->hasOne('App\Rekening');
    }
}
