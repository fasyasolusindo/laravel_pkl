@extends ('layout')

@section('content')
<section class="content">
            @foreach($test->barang as $c)
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $c->nama_barang }}</h3>
              <h4>{{ $c->harga_barang }}</h4>
              <h4 class="mt-3">{{ $c->jumlah_barang }}</h4>
            </div>
            @endforeach
</section>

@endsection

@section('header')

@endsection