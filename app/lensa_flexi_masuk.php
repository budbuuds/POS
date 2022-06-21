<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_flexi_masuk extends Model
{
    protected $table='lensa_flexi_masuk';
    protected $fillable = ['lensa_flexi_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_flexi()
    {
        return $this->belongsTo(lensa_flexi::class);
    }
}
