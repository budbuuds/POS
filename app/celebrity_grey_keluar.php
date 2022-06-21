<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_grey_keluar extends Model
{
    protected $table='celebrity_grey_keluar';
    protected $fillable = ['celebrity_grey_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function celebrity_grey()
    {
        return $this->belongsTo(celebrity_grey::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
