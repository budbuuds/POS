<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_grey_masuk extends Model
{
    protected $table='celebrity_grey_masuk';
    protected $fillable = ['celebrity_grey_id','jumlah_masuk','pj','created_at','updated_at'];

    public function celebrity_grey()
    {
        return $this->belongsTo(celebrity_grey::class);
    }
}
