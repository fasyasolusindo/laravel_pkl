<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kategori;
use App\User;


class BarangController extends Controller
{

    public function index(){
        $kategori = Kategori::all();
        return view('inventory', compact('kategori'));
    }

    public function input_barang(Request $request){
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_barang = $request->harga_barang;
        $barang->kategori = $request->kategori;

        if ($request->hasfile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/data', $filename);
            $barang->img = $filename;
        } else{
            return $request;
            $barang->img = '';
        }

        $barang->save();
        return redirect('/home');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
