<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_black_masuk extends Model
{
    protected $table='celebrity_black_masuk';
    protected $fillable = ['celebrity_black_id','jumlah_masuk','pj','created_at','updated_at'];

    public function celebrity_black()
    {
        return $this->belongsTo(celebrity_black::class);
    }
}
