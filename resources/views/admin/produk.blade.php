@extends('layout.template')
 @section('content')

{{-- <form action="/admin/produk" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nama">
    <input type="number" name="harga">
    <input type="file" name="foto">
    <button type="submit">tambah</button>
</form>

<table>
    <thead>
        <th>no</th>
        <th>nama</th>
        <th>harga</th>
        <th>foto</th>
    </thead>
    <tbody>
        @foreach ($produk as $pro )
            <tr>
                <td>{{ $pro->id }}</td>
                <td>{{ $pro->nama }}</td>
                <td>{{ $pro->harga }}</td>
                <td><img src="/storage/{{ $pro->foto }}" width="30px" height="auto" alt=""></td>
            </tr>
        @endforeach
    </tbody>
 </table> --}}
   

  <h1>Produk</h1>
  <div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/admin/produk">
    <div class="input-group mb-3">
<input type="text" class="form-control ms-4" placeholder="search..." name="search1" value="{{ request('search1') }}">
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
           <a href="{{ route('produktambah')}}" class="btn btn-success my-2 ms-4 me-4">tambah</a>
            <table class="table table-striped ms-4 me-4">
                <thead>
                    <th>no</th>
                    <th>kategori</th>
                    <th>nama</th>
                    <th>harga</th>
                    <th>foto</th>
                    {{-- <th>opsi</th> --}}
                    <th>opsi</th>
                </thead>
                <tbody>
                    @php
                        $n=0;
                    @endphp
                    @foreach ($produk as $pro)
                    @php
                        $n++;
                    @endphp
                    <tr>

                        <td>{{ $n }}</td>
                        <td>{{ $pro->kategori }}</td>
                        <td>{{ $pro->nama }}</td>
                        <td>Rp {{ number_format($pro->harga, 0, ',', '.') }}</td>
                        <td><img src="/storage/{{ $pro->foto }}" width="30px" height="40px" alt=""></td>
                        {{-- <td><a class="btn btn-primary" href="/admin/produkedit/{{ $pro->id }}">edit</a></td> --}}
                        <td><a class="btn btn-danger" onclick="return konfirmasiHapus();" href="/admin/produkdelete/{{ $pro->id }}" >hapus</a></td>
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
    {{ $produk->links() }}
    </div>
 @endsection