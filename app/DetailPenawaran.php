<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPenawaran extends Model
{
	public function pengguna()
	{
    return $this->belongsTo('App\Penawaran');
	}
}
