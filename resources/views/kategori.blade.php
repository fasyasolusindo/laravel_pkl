@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">        
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Kategori</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-head-fixed table-hover">
                  <thead class="text-center">
                    <tr>
                      <th style="width: 10%">ID</th>
                      <th style="width: 20%">Kategori</th>
                
                      <th style="width: 20%">Gambar</th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($kategori as $a)
                    <tr>
                      @foreach ($a->barang as $b)
                      <td>{{ $b->id }}</td>
                      <td><a href="/kategori/{{$b->aset_id}}/detail">{{ $b->kategori }}</td>
                      
                      @endforeach
                      <td><img src="{{ asset('img/data/' . $a->img) }}" width="100px;" height="100px;" alt="img"></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection
