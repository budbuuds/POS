<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccr_keluar extends Model
{
    protected $table='lensa_mccr_keluar';
    protected $fillable = ['lensa_mccr_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_mccr()
    {
        return $this->belongsTo(lensa_mccr::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
