@extends ('layout')

@section('content')
<div class="container">
<form class="form-horizontal" action="{{ route('input_order') }}" method="POST">
  <div class="form-group">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="control-label col-sm-2" for="item">ID Customer</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="id_customer">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">ID Produk</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="id_produk">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Jumlah</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="jumlah">
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