<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frameumum extends Model
{
    protected $table = 'frameumum';
    protected $fillable = ['kode','frame','harga','masuk','keluar'];

    public function frameumum_masuk()
    {
        return $this->hasMany(frameumum_masuk::class);
    }

    public function frameumum_keluar()
    {
        return $this->hasMany(frameumum_keluar::class);
    }
}
