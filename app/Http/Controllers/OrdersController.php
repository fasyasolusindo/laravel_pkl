<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orders;

class OrdersController extends Controller
{
    //

    public function index(){
    	//
    	return view('input_orders');
    }
    public function input_orders(request $request){
    		$orders = new Orders();
    		$orders->id_customer= $request->id_customer;
    		$orders->id_produk = $request->id_produk;
            $orders->jumlah = $request->jumlah;
            $orders->keterangan = $request->keterangan;
    		$orders->save();
    		return "selamat atas bertambahnya data"; 
    }
} 