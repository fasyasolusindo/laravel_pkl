<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = "tb_peminjaman";
    protected $fillable = ['nama_peminjam', 'no_hp', 'tanggal_peminjaman', 'barang_id', 'jumlah_pinjam'];

    public function barang(){
        return $this->belongsTo('App\Barang', 'barang_id');
    }

}
