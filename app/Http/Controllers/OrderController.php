<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class OrderController extends Controller
{

    public function index(){
        return view('input_order');
    }

    public function input_order(Request $request){
        $order = new Order();
        $order->id_customer = $request->id_customer;
        $order->id_produk = $request->id_produk;
        $order->jumlah = $request->jumlah;
        $order->keterangan = $request->keterangan;
        $order->save();
        return "Order berhasil diinput";
        
    }

}
