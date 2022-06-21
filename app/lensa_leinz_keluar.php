<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_leinz_keluar extends Model
{
    protected $table='lensa_leinz_keluar';
    protected $fillable = ['lensa_leinz_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_leinz()
    {
        return $this->belongsTo(lensa_leinz::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
