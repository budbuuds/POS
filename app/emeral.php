<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emeral extends Model
{
    protected $table = 'emeral';
    protected $fillable = ['faktur','hari','frame','lensa','ukuran','stokgosok','harga','sisa','pj'];
}
