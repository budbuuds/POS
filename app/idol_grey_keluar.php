<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_grey_keluar extends Model
{
    protected $table='idol_grey_keluar';
    protected $fillable = ['idol_grey_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function idol_grey()
    {
        return $this->belongsTo(idol_grey::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
