<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Orders;

class ContohController extends Controller
{
    //

    public function index(){
        //

        $tes = 'aaaa';
        return view('test', compact('tes'));
    }

    public function input_barang(){
        $barang = new Barang();
        $barang->nama_barang = "PC";
        $barang->jumlah_barang = 10;
        $barang->harga_barang = 10000000;
        $barang->save();
        return "success";
        
    }

    public function input_orders(){
        $orders = new Orders();
        $orders->id_barang = "20";
        $orders->jumlah = 100;
        $orders->save();
        return "success";
        
    }

}
