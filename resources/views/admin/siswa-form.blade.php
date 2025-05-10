 @extends('layout.template')
 @section('content')


 <div >

                <h1>Siswa</h1>
                <form action="/admin/siswa" method="post">
                    @csrf
                    <p>nis <input type="number" name="nis" class="form-control my-2"></p>
                    <p>nama <input type="text" name="nama" class="form-control my-2"></p>
                    <p>kelas <input type="text" name="kelas" class="form-control my-2"></p>
                    <button type="submit" class="btn btn-success my-2">tambah</button>
                </form>
            </div>

@endsection