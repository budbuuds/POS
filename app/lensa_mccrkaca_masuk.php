<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccrkaca_masuk extends Model
{
    protected $table='lensa_mccrkaca_masuk';
    protected $fillable = ['lensa_mccrkaca_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_mccrkaca()
    {
        return $this->belongsTo(lensa_mccrkaca::class);
    }
}
