<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pinjam;
use App\Barang;
use App\User;

class PinjamController extends Controller
{
    public function checkin(){
        $barang = Barang::all();

        $barang = Barang::selectRaw('id')
        ->with('pinjam')
        ->groupBy('id')
        ->get();

        return view('checkin', compact('barang'));
    }

    public function checkout(){
        $checkout = Pinjam::all();
        return view('checkout', compact('checkout'));
    }

    public function status(){
        $status = Pinjam::all();
        return view('status', compact('status'));
    }

    public function check_in(Request $request){
        $checkin = new Pinjam();
        $checkin->nama_peminjam = $request->nama_peminjam;
        $checkin->no_hp = $request->no_hp;
        $checkin->tanggal_peminjaman = $request->tanggal_peminjaman;
        $checkin->barang_id = $request->barang_id;
        $checkin->jumlah_pinjam = $request->jumlah_pinjam;
        $checkin->save();
        return redirect('/status');
    }

    public function delete($id){
        $checkout = Pinjam::find($id);
        $checkout->delete();
        return redirect('/checkout');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
