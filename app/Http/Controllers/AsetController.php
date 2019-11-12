<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aset;


class AsetController extends Controller
{

    public function index(){
        return view('input_aset');
    }

    public function input_aset(Request $request){
        $aset = new Aset();
        $aset->kategori = $request->kategori;
        $aset->nama_aset = $request->nama_aset;
        $aset->jumlah_aset = $request->jumlah_aset;
        
        if ($request->hasfile('img')){
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('img/data', $filename);
            $aset->img = $filename;
        } else{
            return $request;
            $aset->img = '';
        }

        $aset->save();
        return "Aset berhasil diinput";
        
    }

}
