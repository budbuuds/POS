<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccr extends Model
{
    protected $table = 'lensa_mccr';
    protected $fillable = ['ukuran','stock'];

    public function lensa_mccr_masuk()
    {
        return $this->hasMany(lensa_mccr_masuk::class);
    }

    public function lensa_mccr_keluar()
    {
        return $this->hasMany(lensa_mccr_keluar::class);
    }
}
