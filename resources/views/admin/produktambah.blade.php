 @extends('layout.template')
 @section('content')


 <div >

                <h1>Produk Tambah</h1>
                 <a href="/admin/produk" class="btn btn-secondary my-2 ms-4 me-4">kembali</a>
                <form action="/admin/produk" method="post" enctype="multipart/form-data">
                    @csrf
                     <p class="ms-4 me-4">kategori <select name="kategori" id="" class="form-control my-2>
        @foreach($kategori as $kat)
        <option value="{{$kat->uraian}}">{{$kat->uraian}}</option>
        @endforeach
    </select></p>
                    <p class="ms-4 me-4">nama<input type="text" name="nama" class="form-control my-2 ms-2 me-4"></p>
                    <p class="ms-4 me-4">harga <input type="text" name="harga" class="form-control my-2 ms-2 me-4"></p>
                    <p class="ms-4 me-4">foto <input type="file" name="foto" class="form-control my-2 ms-2 me-4"></p>
                    <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success my-2 ms-4 me-4">tambah</button>
                    </div>
                </form>
            </div>

@endsection