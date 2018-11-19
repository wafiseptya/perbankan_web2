<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';

    public function rekening()
    {
    	return $this->belongsTo('App\Rekening', 'rekening_id');
    }
}
