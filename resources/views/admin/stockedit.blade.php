@extends('layout.template')
@section('content')
    <h1>Stock Barang Edit</h1>
     <a href="/admin/stock" class="btn btn-secondary my-2 ms-4 me-4">kembali</a>
            <form action="/admin/stockupdate" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $stock->id }}">
                <p class="ms-4 me-4">nama barang <input type="text" name="nama" class="form-control my-2 ms-4 me-4"  value="{{ $stock->nama }}"></p>
                <p class="ms-4 me-4">stock masuk <input type="number" name="masuk" class="form-control my-2 ms-4 me-4"  value="{{ $stock->masuk }}"></p>
                <p class="ms-4 me-4">stock keluar <input type="number" name="keluar" class="form-control my-2 ms-4 me-4"  value="{{ $stock->keluar }}"></p>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary my-2 ms-4 me-4">update</button>
                </div>
            </form>
            
@endsection