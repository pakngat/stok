@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Edit Produk</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" action="{{ route('produk.update',$produk->id_produk) }}" method="post">
              {{ csrf_field() }} {{ method_field('PATCH') }}

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <div class="form-group">
                <label for="nama" class="col-md-3 control-label">Nama Produk</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama_produk }}">
                </div>
              </div>

              <div class="form-group">
                <label for="kategori" class="col-md-3 control-label">Kategori</label>
                <div class="col-md-6">
                  <select class="form-control" name="kategori">
                    <option value=""> -- Pilih Kategori -- </option>
                    @foreach ($kategori as $list)
                      <option value="{{ $list->id_kategori }}" {{ $produk->id_kategori = $list->id_kategori ? 'selected' : '' }}>{{ $list->nama_kategori }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="harga" class="col-md-3 control-label">Harga Jual</label>
                <div class="col-md-6">
                  <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga_jual }}">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-3 col-md-offset-3">
                  <button type="submit" class="btn btn-primary" name="button">Simpan</button>
                  <a href="{{ url('produk') }}" class="btn btn-warning">Batal</a>
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
