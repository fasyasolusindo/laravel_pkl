@extends ('layout')

@section('content')
<div class="container">
  <form action="{{ route('input_customer') }}" method="POST">
      <div class="col-lg-6">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
              <label for="item">Customer</label>
              <input type="text" class="form-control" name="customer">
          </div>
          <div class="form-group">
              <label for="item">Nomor Telp.</label>
              <input type="text" class="form-control" name="phone">
          </div>
          <div class="form-group">
              <label for="item">Alamat</label>
              <input type="text" class="form-control" name="address">
          </div>
          <div class="form-group">
              <label for="item">Ket.</label>
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