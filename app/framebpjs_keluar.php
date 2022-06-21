<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class framebpjs_keluar extends Model
{
    protected $table = 'framebpjs_keluar';
    protected $fillable = ['framebpjs_id','jumlah_keluar','pj'];

    public function framebpjs()
    {
        return $this->belongsTo(framebpjs::class);
    }

}
