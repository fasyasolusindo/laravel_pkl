<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aset;


class KategoriController extends Controller
{

    public function index(){
        $kategori = Aset::all();
        return view('kategori', compact('kategori'));
    }

    public function detail($id){
        $test = Aset::find($id);
        return view('detail',['test' => $test]);
    }

}
