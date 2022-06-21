<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccr_masuk extends Model
{
    protected $table='lensa_mccr_masuk';
    protected $fillable = ['lensa_mccr_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_mccr()
    {
        return $this->belongsTo(lensa_mccr::class);
    }
}
