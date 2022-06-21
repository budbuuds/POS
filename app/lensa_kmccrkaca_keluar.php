<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccrkaca_keluar extends Model
{
    protected $table='lensa_kmccrkaca_keluar';
    protected $fillable = ['lensa_kmccrkaca_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_kmccrkaca()
    {
        return $this->belongsTo(lensa_kmccrkaca::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
