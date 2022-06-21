<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_black extends Model
{
    protected $table = 'idol_black';
    protected $fillable = ['ukuran','stock'];

    public function idol_black_masuk()
    {
        return $this->hasMany(idol_black_masuk::class);
    }

    public function idol_black_keluar()
    {
        return $this->hasMany(idol_black_keluar::class);
    }
}
