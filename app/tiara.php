<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiara extends Model
{
    protected $table = 'tiara';
    protected $fillable = ['faktur','hari','frame','lensa','ukuran','stokgosok','harga','sisa','pj'];
}
