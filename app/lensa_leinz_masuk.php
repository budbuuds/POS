<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_leinz_masuk extends Model
{
    protected $table='lensa_leinz_masuk';
    protected $fillable = ['lensa_leinz_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_leinz()
    {
        return $this->belongsTo(lensa_leinz::class);
    }
}
