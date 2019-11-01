@extends ('layout')

@section('content')
<div class="container">
<form class="form-horizontal" action="{{ route('input_produk') }}" method="POST">
  <div class="form-group">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="control-label col-sm-2" for="item">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_produk">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Harga Produk</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="harga_produk">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Stok</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="stok">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Ket.</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="keterangan">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 text-right">
        <button type="submit" class="btn btn-success btn-lg" value="submit" name="add">Submit</button> <button type="reset" class="btn btn-success btn-lg">Reset</button>
      </div>
    </div>
  </form>

  

</div>




@endsection

@section('header')

@endsection