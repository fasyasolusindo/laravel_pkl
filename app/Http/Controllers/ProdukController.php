<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\produk;

class ProdukController extends Controller
{
     public function index(){
        //
            return view('input_produk');
    }
    public function input_produk(request $request){
    		$produk = new produk();
    		$produk->nama_produk = $request->nama_produk;
    		$produk->harga_produk = $request->harga_produk;
            $produk->stok = $request->stok;
            $produk->keterangan = $request->keterangan; 
    		$produk->save();
    		return "Selamat & Sukses atas inputannya"; 
    }
} 