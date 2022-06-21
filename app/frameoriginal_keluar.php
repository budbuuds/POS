<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frameoriginal_keluar extends Model
{
    protected $table = 'frameoriginal_keluar';
    protected $fillable = ['frameoriginal_id','jumlah_keluar','warna','pj','tujuan_id'];

    public function frameoriginal()
    {
        return $this->belongsTo(frameoriginal::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
