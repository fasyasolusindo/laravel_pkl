<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{

    public function index(){
        return view('input_customer');
    }

    public function input_customer(Request $request){
        $customer = new Customer();
        $customer->customer = $request->customer;
        $customer->no_phone = $request->phone;
        $customer->alamat = $request->addres;
        $customer->keterangan = $request->keterangan;
        $customer->save();
        return "Customer berhasil diinput";
        
    }

}
