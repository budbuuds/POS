<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_black_keluar extends Model
{
    protected $table='idol_black_keluar';
    protected $fillable = ['idol_black_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function idol_black()
    {
        return $this->belongsTo(idol_black::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
