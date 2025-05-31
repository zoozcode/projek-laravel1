@extends('layout.template')
 @section('content')


 <h1>Kategori Edit</h1>
 <a href="/admin/kategori" class="btn btn-secondary my-2 ms-4 me-4">kembali</a>
            <form action="/admin/kategoriupdate" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $kategori->id }}">
                <p class="ms-4 me-4">nama kategori <input type="text" name="uraian" class="form-control my-2 ms-2 me-4"  value="{{ $kategori->uraian }}"></p>
                <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary my-2 ms-4 me-4">update</button>
                </div>
            </form>
            
          
@endsection