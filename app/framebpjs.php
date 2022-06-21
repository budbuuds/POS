<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class framebpjs extends Model
{
    protected $table = 'framebpjs';
    protected $fillable = ['kode','frame','harga','masuk','keluar'];

    public function framebpjs_masuk()
    {
        return $this->hasMany(framebpjs_masuk::class);
    }

    public function framebpjs_keluar()
    {
        return $this->hasMany(framebpjs_keluar::class);
    }
}
