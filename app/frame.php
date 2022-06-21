<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frame extends Model
{
    protected $table = 'frame';
    protected $fillable = ['merek','warna','jumlah','ket','pj'];

    public function frame_keluar()
    {
        return $this->hasMany(frame_keluar::class);
    }
}
