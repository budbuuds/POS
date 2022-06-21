<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccr_masuk extends Model
{
    protected $table='lensa_kmccr_masuk';
    protected $fillable = ['lensa_kmccr_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_kmccr()
    {
        return $this->belongsTo(lensa_kmccr::class);
    }
}
