<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;


class BaperController extends Controller
{
    public function index(){
        //
        $inventory = Produk::all();
        return view('baper', compact('inventory'));
        return Validator::make($data,[
        'checkbox' =>'required']);


    }
}
