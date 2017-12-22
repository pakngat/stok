<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('produk/semua',function (){
  $produk = App\Produk::all();
  foreach ($produk as $data) {
    echo $data->id_produk.". ".
          $data->nama_produk."-".
          $data->harga_jual."<br>";
  }
});

Route::get('kategori',function(){
  $kategori = App\Kategori::where('id_kategori','=','2')->first();

  echo "Produk untuk kategori ".$kategori->nama_kategori." : ";
  foreach ($kategori->produk as $data) {
    echo "<li>".$data->nama_produk."</li>";
  }

});

Route::resource('produk','ProdukController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
