@extends ('layout')

@section('content')
<div class="container">
<form class="form-horizontal" action="kondisi.php" method="POST">
  <div class="form-group">
      <label class="control-label col-sm-2" for="kodeitem">Kode Item</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="kodeitem" value="<?php $kodeitem; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="namaitem">Nama Item</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="namaitem" value="<?php $namaitem; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Harga</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="harga" value="<?php $harga; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="qty">Qty</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="qty" value="<?php $qty; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="total">Total</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="total" readonly>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="ket">Keterangan</label>
    <div class="col-sm-10">
        <textarea class="form-control" rows="5" name="ket" placeholder="Beri Keterangan" value="<?php $ket; ?>"></textarea>
    </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 text-right">
        <button type="submit" class="btn btn-success btn-lg" value="submit">Submit</button> <button type="reset" class="btn btn-success btn-lg">Reset</button>
      </div>
    </div>
  </form>

  

</div>




@endsection

@section('header')

@endsection