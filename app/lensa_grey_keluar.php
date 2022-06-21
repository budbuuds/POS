<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_grey_keluar extends Model
{
    protected $table='lensa_grey_keluar';
    protected $fillable = ['lensa_grey_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_grey()
    {
        return $this->belongsTo(lensa_grey::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
