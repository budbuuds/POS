<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_black_keluar extends Model
{
    protected $table='celebrity_black_keluar';
    protected $fillable = ['celebrity_black_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function celebrity_black()
    {
        return $this->belongsTo(celebrity_black::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
