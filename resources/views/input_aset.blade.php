@extends ('layout')

@section('content')
<div class="container">
<form class="form-horizontal" action="{{ route('input_aset') }}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <label class="control-label col-sm-2" for="item">Kategori</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="kategori">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Nama Aset</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nama_aset">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Jumlah Aset</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" name="jumlah_aset">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="item">Image</label>
      <div class="col-sm-10">          
        <input type="file" name="img">
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