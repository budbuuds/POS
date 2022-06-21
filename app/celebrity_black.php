<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_black extends Model
{
    protected $table = 'celebrity_black';
    protected $fillable = ['ukuran','stock'];

    public function celebrity_black_masuk()
    {
        return $this->hasMany(celebrity_black_masuk::class);
    }

    public function celebrity_black_keluar()
    {
        return $this->hasMany(celebrity_black_keluar::class);
    }
}
