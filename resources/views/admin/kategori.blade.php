@extends('layout.template')
 @section('content')

  <h1>Kategori</h1>
  <div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/admin/kategori">
    <div class="input-group mb-3">
<input type="text" class="form-control ms-4" placeholder="search..." name="search2" value="{{ request('search2') }}">
  <button class="btn btn-primary" type="submit" >search</button>
</div>
    </form>
  </div>
</div>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
           <a href="{{ route('kategoritambah')}}" class="btn btn-success my-2 ms-4 me-4">tambah</a>
            <table class="table table-striped ms-4 me-4">
                <thead>
                    <th>no</th>
                    <th>kategori barang</th>
                    <th>opsi</th>
                    <th>opsi</th>
                </thead>
                <tbody>
                    @php
                        $n=0;
                    @endphp
                    @foreach ($kategori as $kat)
                    @php
                        $n++;
                    @endphp
                    <tr>

                        <td>{{ $n }}</td>
                        <td>{{ $kat->uraian }}</td>
                        <td><a class="btn btn-primary" href="/admin/kategoriedit/{{ $kat->id }}">edit</a></td>
                        <td><a class="btn btn-danger" onclick="return konfirmasiHapus();" href="/admin/kategoridelete/{{ $kat->id }}" >hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
         <script>
         function konfirmasiHapus() {
        if (confirm("Apakah Anda yakin ingin menghapus?")) {
            // Lakukan tindakan penghapusan di sini (contoh: redirect ke halaman penghapusan)
            window.location.href = "link_untuk_menghapus.html";
        } else {
            // Jika pengguna menolak, lakukan sesuatu (contoh: jangan lakukan apa-apa)
            return false;
        }
    }
    </script>
    <div class="paginate ms-4">

        {{ $kategori->links() }}
    </div>
 @endsection