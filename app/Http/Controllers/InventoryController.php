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

    public function edit($id){
        $inventory = \App\Barang::find($id);
        return view('inventory/edit',['inventory' => $inventory]);
    }

    public function update(Request $request,$id){
        $inventory = \App\Barang::find($id);
        $inventory->update($request->all());
        return redirect('/inventory');
    }

    public function delete($id){
        $inventory = \App\Barang::find($id);
        $inventory->delete($inventory);
        return redirect('/inventory');
    }
}