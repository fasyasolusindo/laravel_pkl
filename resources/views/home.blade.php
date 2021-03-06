@extends('layouts.app')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Inventory</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Barang</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-head-fixed table-hover">
                  <thead class="text-center">
                    <tr>
                      <th style="width: 10%">ID Barang</th>
                      <th style="width: 20%">Nama Barang</th>
                      <th style="width: 20%">Jumlah Barang</th>
                      <th style="width: 20%">Harga Barang</th>
                      <th style="width: 20%">Kategori</th>
                      <th style="width: 20%">Gambar</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($inventory as $inv)
                    <tr>
                      <td>{{ $inv->id }}</td>
                      <td>{{ $inv->nama_barang }}</td>
                      <td>{{ $inv->jumlah_barang }}</td>
                      <td>{{ number_format($inv->harga_barang, 2,",",".") }}</td>
                      <td>{{ $inv->kategori }}</td>
                      <td><img src="{{ asset('img/data/' . $inv->img) }}" width="100px;" height="100px;" alt="img"></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection
