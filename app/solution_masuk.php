<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solution_masuk extends Model
{
    protected $table='solution_masuk';
    protected $fillable = ['solution_id','jumlah_masuk','pj','created_at','updated_at'];

    public function solution()
    {
        return $this->belongsTo(solution::class);
    }
}
