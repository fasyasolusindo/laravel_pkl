@extends ('layout')

@section('content')
<div class="container">
  <form action="{{ route('input_produk') }}" method="POST">
      <div class="col-lg-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="item">Nama Produk</label>
              <input type="text" class="form-control" name="nama_produk">
          </div>
          <div class="form-group">
              <label for="item">Harga Produk</label>
              <input type="number" class="form-control" name="harga_produk">
          </div>
          <div class="form-group">
              <label for="item">Stok</label>
              <input type="number" class="form-control" name="stok">
          </div>
          <div class="form-group">
              <label for="item">Keterangan</label>
              <input type="text" class="form-control" name="keterangan">
          </div>
          <div class="form-group text-right">
              <button for="button" class="btn btn-primary" name="add">Submit</button>
          </div>
      </div>
  </form>
</div>
@endsection
@section('header')

@endsection