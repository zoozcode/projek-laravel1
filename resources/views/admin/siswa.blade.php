<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
    
    <link rel="stylesheet" href="/contoh.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/logo.png" alt="">
                    <h2>SMK</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-outlined">close </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="/admin/admin"><span class="material-symbols-outlined">dashboard</span>
                    <h3>dashboard</h3>
                </a>
                <a href="/admin/siswa"><span class="material-symbols-outlined">school</span>
                    <h3>siswa</h3>
                </a>
                <a href="/admin/prestasi"><span class="material-symbols-outlined">social_leaderboard </span>
                    <h3>prestasi siswa</h3>
                </a>
                <a href=""><span class="material-symbols-outlined">co_present</span>
                    <h3>pegawai</h3>
                </a>
                <a href="logout"><span class="material-symbols-outlined">logout</span>
                    <h3>keluar</h3>
                </a>
            </div>
        </aside>

        {{-- end of aside --}}
        <main>
           
           
           <a href="{{ route('siswa.form')}}" class="btn btn-success my-2">tambah</a>
            <table class="table table-bordered">
                <thead>
                    <th>no</th>
                    <th>nis</th>
                    <th>nama</th>
                    <th>kelas</th>
                    <th>opsi</th>
                    <th>opsi</th>
                </thead>
                <tbody>
                    @foreach ($siswa as $sis)
                    <tr>

                        <td>{{ $sis->id }}</td>
                        <td>{{ $sis->nis }}</td>
                        <td>{{ $sis->nama }}</td>
                        <td>{{ $sis->kelas }}</td>
                        <td><a class="btn btn-primary" href="/admin/siswaedit/{{ $sis->id }}">edit</a></td>
                        <td><a class="btn btn-danger" href="/admin/siswadelete/{{ $sis->id }}">hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </main>
        
    </div>
</body>
</html>