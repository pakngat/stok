@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Daftar Produk
            <a href="{{ route('produk.create') }}" class="btn btn-success pull-right" style="margin-top:-8px">Tambah</a> <br>
            </h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga Jual</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($produk as $data)
                  <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->nama_kategori }}</td>
                    <td>{{ $data->harga_jual }}</td>
                    <td>
                      <form class="" action="{{ route('produk.destroy', $data->id_produk) }}" method="post">
                        {{ csrf_field() }} {{ method_field('DELETE') }}
                        <a href="{{ route('produk.edit', $data->id_produk) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" name="button" class="btn btn-danger">Hapus</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {{ $produk->links() }}
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
