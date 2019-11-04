<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;



class InventoryController extends Controller
{

    public function index(){

        $inventory = Barang::all();
        return view('inventory', compact('inventory'));
    }
}