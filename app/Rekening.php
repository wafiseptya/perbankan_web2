<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    protected $table='rekening';
    public function transaksi()
    {
    	return $this->hasMany('App\Transaksi');
    }
}
