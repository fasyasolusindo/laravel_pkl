<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
     protected $table = "orders";
    protected $fillable = ['id_customer','id_produk','jumlah','keterangan'];
    
}
