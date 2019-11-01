@extends ('layout')

@section('content')
<div class="container">
<form action ="aksi.php" method="POST">
	<div class="col-lg-6">
<div class="form-group">
  <label for="item">Kode Item:</label>
  <input type="number" class="form-control" name="kodeitem">
</div>
<div class="form-group">
  <label for="item">Nama Item:</label>
  <input type="text" class="form-control" name="namaitem">
</div>
<div class="form-group">
  <label for="harga">Harga:</label>
  <input type="number" class="form-control" name="harga">
</div>
<div class="form-group">
  <label for="qty">Quantity:</label>
  <input type="number" class="form-control" name="quantity">
</div>
<div class="form-group">
  <label for="total">Total:</label>
  <input type="" class="form-control" name="total" disabled="">
</div>
<div class="form-group">
  <label for="ket">Keterangan</label>
  <textarea class="form-control" rows="5" name="ket"></textarea>
</div>
<div class="form-group text-right">
<button for="button" class="btn btn-primary" name="add">Submit</button>
</div>
</div>
</form>

@endsection

@section('header')

@endsection