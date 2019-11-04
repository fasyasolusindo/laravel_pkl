<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;


class BarangController extends Controller
{

    public function index(){
        return view('input_barang');
    }

    public function input_barang(Request $request){
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->save();
        return "Barang berhasil diinput";
        
    }

}
