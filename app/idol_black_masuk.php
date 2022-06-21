<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_black_masuk extends Model
{
    protected $table='idol_black_masuk';
    protected $fillable = ['idol_black_id','jumlah_masuk','pj','created_at','updated_at'];

    public function idol_black()
    {
        return $this->belongsTo(idol_black::class);
    }
}
