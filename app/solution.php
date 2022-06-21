<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solution extends Model
{
    protected $table = 'solution';
    protected $fillable = ['ukuran','stock'];

    public function solution_masuk()
    {
        return $this->hasMany(solution_masuk::class);
    }

    public function solution_keluar()
    {
        return $this->hasMany(solution_keluar::class);
    }
}
