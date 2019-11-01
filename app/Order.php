<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $fillable = ['id', 'id_customer', 'id_produk', 'jumlah', 'keterangan'];
}
