<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\User;


class KategoriController extends Controller
{

    public function index(){
        $kategori = Kategori::all();
        return view('kategori', compact('kategori'));
    }

    public function input_kategori(Request $request){
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        return redirect('/kategori');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
