<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_grey_masuk extends Model
{
    protected $table='lensa_grey_masuk';
    protected $fillable = ['lensa_grey_id','jumlah_masuk','pj','created_at','updated_at'];

    public function lensa_grey()
    {
        return $this->belongsTo(lensa_grey::class);
    }
}
