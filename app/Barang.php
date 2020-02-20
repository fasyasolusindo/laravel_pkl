<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "tb_barang";
    protected $fillable = ['nama_barang', 'jumlah_barang', 'harga_barang', 'kategori','img'];

    public function pinjam(){
        return $this->hasMany(Pinjam::class);
    }

}
