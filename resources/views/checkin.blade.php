@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Check In</h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Ini Bagian Form Input -->
    <section class="content">
        <div class="container-fluid">        
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Silahkan Check In</h3>
                </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{ route('check_in') }}" method="POST">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label class="control-label col-sm-2" for="item">Nama Peminjam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_peminjam">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="item">No. HP</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="no_hp">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm" for="item">Tanggal Peminjaman</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_peminjaman">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="item">ID Barang</label>
                <div class="col-sm-10">
                <select class="form-control select2" name="barang_id" style="width: 100%;">
                @foreach($barang as $b)
                    <option value="{{ $b->id }}">{{ $b->id }}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="item">Jumlah Pinjam</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah_pinjam">
                </div>
            </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10 text-right">
            <button type="submit" class="btn btn-success btn-lg" value="submit">Check In</button>
            </div>
        </div>
            </form>
                </div>
            </div>
            </div>
        </div>
        </section>
    <!-- Akhir Form Input -->

</div>


@endsection