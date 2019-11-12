<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $table = "aset";
    protected $fillable = ['kategori', 'nama_aset', 'jumlah_aset', 'img'];

}
