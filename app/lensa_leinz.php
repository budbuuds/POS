<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_leinz extends Model
{
    protected $table = 'lensa_leinz';
    protected $fillable = ['ukuran','stock'];

    public function lensa_leinz_masuk()
    {
        return $this->hasMany(lensa_leinz_masuk::class);
    }

    public function lensa_leinz_keluar()
    {
        return $this->hasMany(lensa_leinz_keluar::class);
    }
}
