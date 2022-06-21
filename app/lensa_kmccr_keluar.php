<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccr_keluar extends Model
{
    protected $table='lensa_kmccr_keluar';
    protected $fillable = ['lensa_kmccr_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_kmccr()
    {
        return $this->belongsTo(lensa_kmccr::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
