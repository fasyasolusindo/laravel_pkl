@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Status Peminjaman</h1>
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
                <h3 class="card-title">Status Peminjaman Barang</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-head-fixed table-hover">
                  <thead class="text-center">
                    <tr>
                      <th style="width: 10%">ID Peminjaman</th>
                      <th style="width: 20%">Nama Peminjam</th>
                      <th style="width: 20%">No. Hp</th>
                      <th style="width: 20%">Tanggal Peminjaman</th>
                      <th style="width: 20%">ID Barang</th>
                      <th style="width: 20%">Jumlah Pinjam</th>
                      <th style="width: 20%"></th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($status as $s)
                    <tr>
                      <td>{{ $s->id }}</td>
                      <td>{{ $s->nama_peminjam }}</td>
                      <td>{{ $s->no_hp }}</td>
                      <td>{{ $s->tanggal_peminjaman }}</td>
                      <td>{{ $s->barang_id }}</td>
                      <td>{{ $s->jumlah_pinjam }}</td>
                      <td><span class="badge badge-danger">Belum Dikembalikan</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            <!-- Akhir Input Barang -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  @endsection
