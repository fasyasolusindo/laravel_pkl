<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        protected $table = "customers";
    protected $fillable = ['id','ccustomer','no_phone','alamat','keterangan'];
	}
