 @extends('layout.template')
 @section('content')


 <div >

                <h1>Stock Barang Tambah</h1>
                 <a href="/admin/stock" class="btn btn-secondary my-2 ms-4 me-4">kembali</a>
                <form action="/admin/stock" method="post">
                    @csrf
                    <p class="ms-4 me-4">nama barang <input type="text" name="nama" class="form-control my-2 ms-2 me-4"></p>
                    <p class="ms-4 me-4">stock masuk <input type="number" name="masuk" class="form-control my-2 ms-2 me-4"></p>
                    <p class="ms-4 me-4">stock keluar <input type="number" name="keluar" class="form-control my-2 ms-2 me-4"></p>
                    <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success my-2 ms-4 me-4">tambah</button>
                    </div>
                </form>
            </div>

@endsection