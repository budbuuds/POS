<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['invoice','pj','nama_dis','created_at','updated_at'];
}
