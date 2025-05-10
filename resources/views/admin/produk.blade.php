<form action="/admin/produk" method="post" enctype="multipart/form-data">
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
 </table>
