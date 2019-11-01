<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

class ContohController extends Controller
{
    //

    public function index(){
    	//
    	
    	$tes = 'uyii';
    	return view('test', compact('tes'));
    }
    public function input_order(){
    		$order = new Order();
    		$order->id_barang = 1;
    		$order->jumlah = 2;
    		$order->save();
    		return "succes"; 
    }
} 