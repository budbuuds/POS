<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccrkaca_keluar extends Model
{
    protected $table='lensa_mccrkaca_keluar';
    protected $fillable = ['lensa_mccrkaca_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_mccrkaca()
    {
        return $this->belongsTo(lensa_mccrkaca::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
