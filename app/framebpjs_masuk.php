<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class framebpjs_masuk extends Model
{
    protected $table = 'framebpjs_masuk';
    protected $fillable = ['framebpjs_id','jumlah_masuk','pj'];

    public function framebpjs()
    {
        return $this->belongsTo(framebpjs::class);
    }
}
