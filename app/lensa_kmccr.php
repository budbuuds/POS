<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccr extends Model
{
    protected $table = 'lensa_kmccr';
    protected $fillable = ['ukuran','stock'];

    public function lensa_kmccr_masuk()
    {
        return $this->hasMany(lensa_kmccr_masuk::class);
    }

    public function lensa_kmccr_keluar()
    {
        return $this->hasMany(lensa_kmccr_keluar::class);
    }
}
