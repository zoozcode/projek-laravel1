<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mebel</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
    <link rel="shortcut icon" href="../gambar/1.jpeg" type="image/x-icon">

    {{-- bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    <div class="navbara">
        <div class="container">
            <div class="navbara-box">
                <div class="logo">
                    <h1>zooz</h1>
                </div>
                    <ul class="menu menu-active">
                        <li><a href="">home</a></li>
                        <li><a href="produk">produk</a></li>
                        <li><a href="">pesan&bayar</a></li>
                        <li><a href="">profil</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">contact</a></li>
                    </ul>
                <!-- hamburger -->
                <i class="ri-menu-line ri-2x"></i>
            </div>
        </div>
    </div>

    {{-- bacground --}}
    <div class="bg">
        <img src="bgfurniture.jpg" alt="">
    </div>

    <!-- hero -->
    <div class="hero">
        <div class="container">
            <div class="hero-box">
                <div class="box">
                    <h1>katalog produk eloktranik</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur accusantium adipisci deserunt doloremque maxime autem non praesentium saepe dolorum nostrum.</p>
                    <a href="#">detail produk kami</a>
                </div>
                <div class="box">
                    <img src="pppdb.jpg" alt="hero image">
                </div>
            </div>
        </div>
    </div>

    <!-- layanan -->
     <div class="layanan">
        <div class="container">
            <div class="layanan-box">
                <div class="box">
                    <i class="ri-star-fill ri-2x"></i>
                    <h2>produk original</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quaerat.</p>
                </div>
                <div class="box">
                    <i class="ri-price-tag-fill ri-2x"></i>
                    <h2>harga terjangkau</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quaerat.</p>
                </div>
                <div class="box">
                    <i class="ri-shopping-cart-fill ri-2x"></i>
                    <h2>terjual 10.000+</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quaerat.</p>
                </div>
            </div>
        </div>
     </div>

     <!-- produk -->
     <div class="produk">
        <div class="container">
            <div class="produk-box">
                <h2>produk kami</h2>
                <ul>
                    <li class="active">All produk</li>
                    <li>kursi</li>
                    <li>meja</li>
                    <li>lemari</li>
                    <li>bangku</li>
                </ul>

                <div class="produk-list">
                    <img src="kursiii.png"  alt="produk image" data-filter="bangku">
                    <img src="kursiii.png" alt="produk image" data-filter="kursi">
                    <img src="kursiii.png" alt="produk image" data-filter="meja">
                    <img src="kursiii.png" alt="produk image" data-filter="lemari">
                    <img src="kursiii.png" alt="produk image" data-filter="lemari">
                    <img src="kursiii.png" alt="produk image" data-filter="kursi">
                    <img src="kursiii.png" alt="produk image" data-filter="meja">
                    <img src="kursiii.png" alt="produk image" data-filter="bangku">
                </div>
            </div>
        </div>
     </div>

     {{-- footer --}}
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="box">
                    <h2>Social Media</h2>
                    <p>SMK Negeri 1 Jepara "SMART "
<br>
                        Santun, Mandiri, Amanah, Religius, dan Terampil</p>
                    <div class="social">
                        <a href="https://web.facebook.com/SmkNegeri1Jepara"> <i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/smknegeri1jepara/"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@SMKNegeri1Jepara"> <i class="fa-brands fa-youtube"></i></a>
                        <a href="(0291) 4295612"> <i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="box">
                    <h2>Menu</h2>
                    <a href="/user">Beranda</a>
                    <a href="/prestasi">Prestasi</a>
                    <a href="/gallery">Gallery</a>
                </div>
                <div class="box">
                    <h2>Kontak</h2>
                    <p><i class="fa-solid fa-envelope"></i>mail@smk1jepara.net</p>
                    <p><i class="fa-solid fa-phone"></i>(0291) 4295612</p>
                    <p><i class="fa-solid fa-location-pin"></i> Jl. Gudangsawo km 1.5, Mulyoharjo</p>
                </div>
            </div>

            {{-- copigright --}}
            <div class="copyright">
                <p style="color: white">Copyright 2025 &copy; SMK N 1 Jepara</p>
            </div>
            
        </div>
    </footer>

</body>
<script src="home.js"></script>
</html>