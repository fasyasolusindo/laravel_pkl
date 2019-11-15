<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Penawaran;
use PDF;

class PenawaranController extends Controller
{
    public function index(){
        //
        $inventory = Produk::all();
        return view('input_penawaran', compact('inventory'));
        return view('input_penawaran.input_penawaran');
    }

        //store
         public function input_penawaran(request $request){
            $penawaran = new Penawaran();
            $penawaran->nama_customer = $request->nama_customer;
            $penawaran->barang = $request->barang;
            $penawaran->harga_barang = dd($request->harga_barang)       ;
            $penawaran->quantity = $request->quantity;
            $penawaran->total = $request->harga_barang * $request->quantity;
            $penawaran->keterangan = $request->keterangan; 
            $penawaran->save();
            return ('<img src="../../img/FPS.png">');

    }
         public function cetak_pdf()
    {
             $penawaran= Penawaran::all();
 
             $pdf = PDF::loadview('invoice_pdf',['penawaran'=>$penawaran]);
             return $pdf->download('invoice-penawaran-pdf');   
} 
         public function getInfo($id)
{
             $fill = \DB::table('Produk')->where('nama_produk', $id)->pluck('harga_produk');

             return Response()->json(['success'=>true, 'harga_barang'=>$fill]);
             return json_decode(json_encode($fill));
}
}

    