<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccrkaca_masuk extends Model
{
    protected $table='lensa_kmccrkaca_masuk';
    protected $fillable = ['lensa_kmccrkaca_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_kmccrkaca()
    {
        return $this->belongsTo(lensa_kmccrkaca::class);
    }
}
