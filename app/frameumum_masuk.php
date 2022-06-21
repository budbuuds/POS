<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frameumum_masuk extends Model
{
    protected $table = 'frameumum_masuk';
    protected $fillable = ['frameumum_id','jumlah_masuk','pj'];

    public function frameumum()
    {
        return $this->belongsTo(frameumum::class);
    }
}
