@extends ('layout')

@section('content')
<div class="container">
  <form action="{{ route('input_orders') }}" method="POST">
      <div class="col-lg-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="item">ID Customer</label>
              <input type="text" class="form-control" name="id_customer">
          </div>
          <div class="form-group">
              <label for="item">ID Produk</label>
              <input type="text" class="form-control" name="id_produk">
          </div>
          <div class="form-group">
              <label for="item">Jumlah</label>
              <input type="number" class="form-control" name="jumlah">
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