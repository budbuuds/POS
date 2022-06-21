<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_mccrkaca extends Model
{
    protected $table = 'lensa_mccrkaca';
    protected $fillable = ['ukuran','stock'];

    public function lensa_mccrkaca_masuk()
    {
        return $this->hasMany(lensa_mccrkaca_masuk::class);
    }

    public function lensa_mccrkaca_keluar()
    {
        return $this->hasMany(lensa_mccrkaca_keluar::class);
    }
}
