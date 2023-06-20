@extends('admin.layout.app')
@section('content')
@foreach ($kategori_produk as $kat)
<form method="POST" action="{{ url('admin/kategoriproduk/update/'. $kat->id) }}">
  {{ csrf_field() }}
  <h4 style="text-align: center">Form Edit Data</h4>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Pemesan</label> 
      <div class="col-8">
        <input id="nama" name="nama" value="{{ $kat->nama }}" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-success">Simpan Edit</button>
      </div>
    </div>
  </form>
  @endforeach
@endsection