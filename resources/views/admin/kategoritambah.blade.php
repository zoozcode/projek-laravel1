 @extends('layout.template')
 @section('content')


 <div >

                <h1>Kategori Tambah</h1>
                 <a href="/admin/kategori" class="btn btn-secondary my-2 ms-4 me-4">kembali</a>
                <form action="/admin/kategori" method="post">
                    @csrf
                    <p class="ms-4">nama kategori <input type="text" name="uraian" class="form-control my-2 ms-2 me-4"></p>
                    <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success my-2 ms-4 me-4">tambah</button>
                    </div>
                </form>
            </div>

@endsection