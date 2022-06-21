<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_brown_masuk extends Model
{
    protected $table='idol_brown_masuk';
    protected $fillable = ['idol_brown_id','jumlah_masuk','pj','created_at','updated_at'];

    public function idol_brown()
    {
        return $this->belongsTo(idol_brown::class);
    }
}
