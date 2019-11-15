<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    protected $fillable = ['nama_barang', 'jumlah_barang', 'harga_barang', 'kategori'];

    public function aset(){
        return $this->belongsTo(Aset::class,'kategori');
    }

}
