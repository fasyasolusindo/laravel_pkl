<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;


class ProdukController extends Controller
{

    public function index(){
        return view('input_produk');
    }

    public function input_produk(Request $request){
        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stok = $request->stok;
        $produk->keterangan = $request->keterangan;
        $produk->save();
        return "Produk berhasil diinput";
        
    }

}
