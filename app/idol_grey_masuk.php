<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_grey_masuk extends Model
{
    protected $table='idol_grey_masuk';
    protected $fillable = ['idol_grey_id','jumlah_masuk','pj','created_at','updated_at'];

    public function idol_grey()
    {
        return $this->belongsTo(idol_grey::class);
    }
}
