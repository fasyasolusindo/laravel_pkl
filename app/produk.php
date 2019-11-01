<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produk";
    protected $fillable = ['id','nama_produk','harga_produk','stok','keterangan'];
    public $timestamps = false;
}
