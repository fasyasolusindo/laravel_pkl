@extends('layouts.app')

@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Kategori</h1>
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
                <h3 class="card-title">Silahkan Input Kategori</h3>
              </div>
      <div class="card-body">
        <form class="form-horizontal" action="{{ route('input_kategori') }}" method="POST">
          <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label class="control-label col-sm-2" for="item">Nama Kategori</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_kategori">
              </div>
          </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10 text-right">
          <button type="submit" class="btn btn-success btn-lg" value="submit">Simpan</button>
        </div>
      </div>
        </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Akhir Form Input -->


<!-- Tampilan Kategori -->
    <section class="content">
      <div class="container-fluid">        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>
              </div>
      <div class="card-body">
        <table class="table table-head-fixed table-hover">
          <thead class="text-center">
            <tr>
              <th style="width: 10%">ID Kategori</th>
              <th style="width: 80%">Kategori</th>
            </tr>
          </thead>
          <tbody class="text-center">
            @foreach($kategori as $a)
            <tr>
              <td>{{ $a->id }}</td>
              <td>{{ $a->nama_kategori }}</td>
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
