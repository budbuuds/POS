<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_grey extends Model
{
    protected $table = 'celebrity_grey';
    protected $fillable = ['ukuran','stock'];

    public function celebrity_grey_masuk()
    {
        return $this->hasMany(celebrity_grey_masuk::class);
    }

    public function celebrity_grey_keluar()
    {
        return $this->hasMany(celebrity_grey_keluar::class);
    }
}
