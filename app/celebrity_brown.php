<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class celebrity_brown extends Model
{
    protected $table = 'celebrity_brown';
    protected $fillable = ['ukuran','stock'];

    public function celebrity_brown_masuk()
    {
        return $this->hasMany(celebrity_brown_masuk::class);
    }

    public function celebrity_brown_keluar()
    {
        return $this->hasMany(celebrity_brown_keluar::class);
    }
}
