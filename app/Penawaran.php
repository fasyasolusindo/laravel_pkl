<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
        protected $table = "penawaran";
    protected $fillable = ['nama_customer','barang','harga_barang','quantity','total','keterangan'];
    
     protected $appends =['total_harga'];

   		 public function getTotalPriceAttribute()
    {
        return $this->harga_barang * $this->quantity;
    }

}
