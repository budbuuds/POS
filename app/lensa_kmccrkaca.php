<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_kmccrkaca extends Model
{
    protected $table = 'lensa_kmccrkaca';
    protected $fillable = ['ukuran','stock'];

    public function lensa_kmccrkaca_masuk()
    {
        return $this->hasMany(lensa_kmccrkaca_masuk::class);
    }

    public function lensa_kmccrkaca_keluar()
    {
        return $this->hasMany(lensa_kmccrkaca_keluar::class);
    }
}
