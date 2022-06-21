<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frameumum_keluar extends Model
{
    protected $table = 'frameumum_keluar';
    protected $fillable = ['frameumum_id','jumlah_keluar','pj'];

    public function frameumum()
    {
        return $this->belongsTo(frameumum::class);
    }
}
