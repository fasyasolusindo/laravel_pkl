<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
        protected $table = "penawaran";
    protected $fillable = ['nama_customer','barang','harga_barang','quantity','keterangan'];
    
    //public function getTotalPrice() {
    //return $this->buyDetails()->sum(DB::raw('quantity * harga_produk'));
  //}

    public function detailpenawaran() { 
      return $this->hasOne('App\DetailPenawaran'); 
}

}
