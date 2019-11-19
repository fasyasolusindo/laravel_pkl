@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Input Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Input Barang</li>
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
                <h3 class="card-title">Silahkan Input Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form class="form-horizontal" action="{{ route('input_barang') }}" method="POST">
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
                      <input type="text" class="form-control" name="kategori">
                    </div>
                  </div>
                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10 text-right">
                      <button type="submit" class="btn btn-success btn-lg" value="submit">Submit</button> <button type="reset" class="btn btn-success btn-lg">Reset</button>
                    </div>
                  </div>
                </form>
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
  
</div>
<!-- ./wrapper -->

@endsection