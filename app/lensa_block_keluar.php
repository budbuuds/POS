<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_block_keluar extends Model
{
    protected $table='lensa_block_keluar';
    protected $fillable = ['lensa_block_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function lensa_block()
    {
        return $this->belongsTo(lensa_block::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
