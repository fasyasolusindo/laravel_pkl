<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\customers;

class CustomerController extends Controller
{
     public function index(){
        //

    }
    public function input_customer(){
    		$customers = new customers();
    		$customers->customer = "Sapi";
    		$customers->no_phone = 0.1;
            $customers->alamat = "cikeas";
            $customers->keterangan = "royko";
    		$customerss->save();
    		return "Selamat & Sukses atas inputannya"; 
    }
} 