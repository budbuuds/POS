<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_brown_keluar extends Model
{
    protected $table='celebrity_brown_keluar';
    protected $fillable = ['celebrity_brown_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function celebrity_brown()
    {
        return $this->belongsTo(celebrity_brown::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
