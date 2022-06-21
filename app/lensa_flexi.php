<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_flexi extends Model
{
    protected $table = 'lensa_flexi';
    protected $fillable = ['ukuran','stock'];

    public function lensa_flexi_masuk()
    {
        return $this->hasMany(lensa_flexi_masuk::class);
    }

    public function lensa_flexi_keluar()
    {
        return $this->hasMany(lensa_flexi_keluar::class);
    }
}
