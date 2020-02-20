@extends('layouts.app')

@section('content')
<div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Barang</h1>
          </div>
        </div>
      </div>
    </section>


    <!-- Ini Form Input Barang -->
    <section class="content">
      <div class="container-fluid">        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Silahkan Input Barang</h3>
              </div>
              <div class="card-body">
                <form class="form-horizontal" action="{{ route('input_barang') }}" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <label class="control-label col-sm-2" for="item">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_barang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="item">Jumlah Barang</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="jumlah_barang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="item">Harga Barang</label>
                    <div class="col-sm-10">          
                      <input type="number" class="form-control" name="harga_barang">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="item">Kategori</label>
                    <div class="col-sm-10">          
                    <select class="form-control select2" name="kategori" style="width: 100%;">
                    @foreach($kategori as $k)
                      <option value="{{ $k->nama_kategori }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-2" for="item">Gambar</label>
                    <div class="col-sm-10">          
                      <input type="file" class="form-control" name="img">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10 text-right">
                      <button type="submit" class="btn btn-success btn-lg" value="submit">Simpan</button> <button type="reset" class="btn btn-success btn-lg">Hapus</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Form Input Barang -->

  </div>

@endsection