<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_block_masuk extends Model
{
    protected $table='lensa_block_masuk';
    protected $fillable = ['lensa_block_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_block()
    {
        return $this->belongsTo(lensa_block::class);
    }
}
