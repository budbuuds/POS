<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_grey extends Model
{
    protected $table = 'lensa_grey';
    protected $fillable = ['ukuran','stock'];

    public function lensa_grey_masuk()
    {
        return $this->hasMany(lensa_grey_masuk::class);
    }

    public function lensa_grey_keluar()
    {
        return $this->hasMany(lensa_grey_keluar::class);
    }
}
