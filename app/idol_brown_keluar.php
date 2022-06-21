<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_brown_keluar extends Model
{
    protected $table='idol_brown_keluar';
    protected $fillable = ['idol_brown_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function idol_brown()
    {
        return $this->belongsTo(idol_brown::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
