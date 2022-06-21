<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solution_keluar extends Model
{
    protected $table='solution_keluar';
    protected $fillable = ['solution_id','jumlah_keluar','pj','tujuan_id','created_at','updated_at'];

    public function solution()
    {
        return $this->belongsTo(solution::class);
    }

    public function tujuan()
    {
        return $this->belongsTo(tujuan::class);
    }
}
