@extends('layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stok Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Stok Barang</li>
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
                <h3 class="card-title">Daftar Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-head-fixed table-hover">
                  <thead class="text-center">
                    <tr>
                      <th style="width: 10%">ID</th>
                      <th style="width: 20%">Nama Barang</th>
                      <th style="width: 10%">Stok</th>
                      <th style="width: 20%">Harga</th>
                      <th style="width: 20%"></th>
                    </tr>
                  </thead>
                  <tbody class="text-center">
                    @foreach($inventory as $inv)
                    <tr>
                      <td>{{ $inv->id }}</td>
                      <td>{{ $inv->nama_barang }}</td>
                      <td>{{ $inv->jumlah_barang }}</td>
                      <td>{{ number_format($inv->harga_barang, 2,",",".") }}</td>
                      <td class="project-actions text-center">
                          <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-default" href="/inventory/{{ $inv->id }}/edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="/inventory/{{ $inv->id }}/delete" onclick="return confirm('hapus data?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    </tr>
                    <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Data</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="/inventory/{{$inv->id}}/update" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="modal-body">
                        <label class="control-label" for="item">Nama Barang</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nama_barang" value="{{ $inv->nama_barang }}">
                        </div>
                      </div>
                      <div class="modal-body">
                        <label class="control-label" for="item">Jumlah Barang</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="jumlah_barang" value="{{ $inv->jumlah_barang }}">
                        </div>
                      </div>
                      <div class="modal-body">
                        <label class="control-label" for="item">Harga Barang</label>
                        <div class="col-sm-10">          
                          <input type="number" class="form-control" name="harga_barang" value="{{ $inv->harga_barang }}">
                        </div>
                      </div>                          
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
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
  
</div>
<!-- ./wrapper -->


<script>
  $(function () {
    $('#example1').DataTable();
  });
</script>
@endsection