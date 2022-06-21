<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_brown_masuk extends Model
{
    protected $table='celebrity_brown_masuk';
    protected $fillable = ['celebrity_brown_id','jumlah_masuk','pj','created_at','updated_at'];

    public function celebrity_brown()
    {
        return $this->belongsTo(celebrity_brown::class);
    }
}
