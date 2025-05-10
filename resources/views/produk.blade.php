<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
</head>
<body>
    <h2>produk</h2>
    <div class="d-flex wrap gap-3">

        @foreach ($produk as $pro )
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/{{ $pro->foto }}" width="100%" height="100px" alt="Card image cap">
            {{-- <div style="background-image: url('/storage/{{ $pro->foto }}'); width:100%; height:30px" class="w-100 h-50 bg-black" ></div> --}}
            <div class="card-body">
                <h5 class="card-title">{{ $pro->nama }}</h5>
                <p class="card-text">{{ $pro->harga }}</p>
                <a href="#" class="btn btn-success">whatsapp</a>
            </div>
        </div>
        
        @endforeach
    </div>
</body>
</html>