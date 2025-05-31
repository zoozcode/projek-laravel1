@extends('layout.template')
 @section('content')


<h1>Produk</h1>
            <form action="/admin/produkupdate" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $produk->id }}">
                <p class="ms-4 me-4">nama <input type="text" name="nama" class="form-control my-2 ms-2 me-4"  value="{{ $produk->nama }}"></p>
                <p class="ms-4 me-4">harga <input type="text" name="harga" class="form-control my-2 ms-2 me-4"  value="{{ $produk->harga }}"></p>
                <p class="ms-4 me-4">foto <input type="file" name="foto" class="form-control my-2 ms-2 me-4"  value="{{ $produk->foto }}"></p>
                <button type="submit" class="btn btn-primary my-2 ms-4 me-4">update</button>
            </form>
          
@endsection