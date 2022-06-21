<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tujuan extends Model
{
    protected $table = 'tujuan';
    protected $fillable = ['toko','created_at','updated_at'];

    public function lensa_mccr_keluar()
    {
        return $this->hasMany(lensa_mccr_keluar::class);
    }
}
