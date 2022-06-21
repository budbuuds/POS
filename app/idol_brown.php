<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class idol_brown extends Model
{
    protected $table = 'idol_brown';
    protected $fillable = ['ukuran','stock'];

    public function idol_brown_masuk()
    {
        return $this->hasMany(idol_brown_masuk::class);
    }

    public function idol_brown_keluar()
    {
        return $this->hasMany(idol_brown_keluar::class);
    }
}
