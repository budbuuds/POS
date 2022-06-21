<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_flexi_keluar extends Model
{
    protected $table='lensa_flexi_keluar';
    protected $fillable = ['lensa_flexi_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_flexi()
    {
        return $this->belongsTo(lensa_flexi::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
