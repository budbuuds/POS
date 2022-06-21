<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frameoriginal extends Model
{
    protected $table = 'frameoriginal';
    protected $fillable = ['merek','warna','jumlah','ket','pj'];

    public function frameoriginal_keluar()
    {
        return $this->hasMany(frameoriginal_keluar::class);
    }
}
