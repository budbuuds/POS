<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lensa_block extends Model
{
    protected $table = 'lensa_block';
    protected $fillable = ['ukuran','stock'];

    public function lensa_block_masuk()
    {
        return $this->hasMany(lensa_block_masuk::class);
    }

    public function lensa_block_keluar()
    {
        return $this->hasMany(lensa_block_keluar::class);
    }
}
