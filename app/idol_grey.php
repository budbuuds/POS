<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_grey extends Model
{
    protected $table = 'idol_grey';
    protected $fillable = ['ukuran','stock'];

    public function idol_grey_masuk()
    {
        return $this->hasMany(idol_grey_masuk::class);
    }

    public function idol_grey_keluar()
    {
        return $this->hasMany(idol_grey_keluar::class);
    }
}
