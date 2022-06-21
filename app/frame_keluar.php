<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frame_keluar extends Model
{
    protected $table = 'frame_keluar';
    protected $fillable = ['frame_id','jumlah_keluar','warna','pj','tujuan_id'];

    public function frame()
    {
        return $this->belongsTo(frame::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
