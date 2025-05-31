<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meubel jepara</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css1/bootstrap.min.css">
    <link rel="shortcut icon" href="zooz.png" type="image/x-icon">

    {{-- bootstrap --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>

 <!-- splide css cdn -->
     <link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="navbara">
        <div class="container">
            <div class="navbara-box">
                <div class="logo">
                  <img src="zoozcode2.jpg" width="90x" height="90px" alt="">
                </div>
                     <ul class="menu menu-active">
                         <li><a href="home">Home</a></li>
                        <li><a href="produk">Produk</a></li>
                        <li><a href="pesanbayar">Pesan & Bayar</a></li>
                        <li><a href="profile">Profile</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                <!-- hamburger -->
                <i class="ri-menu-line ri-2x"></i>
            </div>
        </div>
    </div>

   @yield('tempel')

     {{-- footer --}}
    <footer>
        <div class="container">
            <div class="footer-box">
                <div class="box">
                    <h2>Social Media</h2>
                    {{-- maps --}}

                    <div style="margin-left: 110px" class="social">
                        <a href="https://web.facebook.com/SmkNegeri1Jepara"> <i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/smknegeri1jepara/"> <i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@SMKNegeri1Jepara"> <i class="fa-brands fa-youtube"></i></a>
                        <a href="(0291) 4295612"> <i class="fa-brands fa-whatsapp"></i></a>
                    </div>
 <iframe style="margin-left: 20px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.558334477461!2d110.66182617378534!3d-6.577287164293838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f6922c9cbe7%3A0x45b191d2ccf5801e!2sMebel%20Jepara%20Barokah!5e0!3m2!1sid!2sid!4v1747448265584!5m2!1sid!2sid" width="330px" height="330px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="box">
                    <h2>Menu</h2>
                    <div style="margin-left: 15px" class="www">

                      <a href="home">Home</a>
                      <a href="produk">Produk</a>
                      <a href="pesanbayar">Pesan & Bayar</a>
                      <a href="profile">Profile</a>
                      <a href="faq">FAQ</a>
                      <a href="contact">Contact</a>
                    </div>
                </div>
                <div class="box">
                    <h2>Kontak</h2>
                    <div style="margin-left: 15px" class="w3">

                      <p><i class="fa-solid fa-envelope"></i>meubeljepara@gmail.com</p>
                      <p><i class="fa-solid fa-phone"></i>(0291) 4295612</p>
                      <p><i class="fa-solid fa-location-pin"></i> Jl. Gudangsawo km 1.5, Mulyoharjo</p>
                    </div>
                </div>
            </div>

            {{-- copigright --}}
            <div class="copyright">
                <p style="color: white">Copyright 2025 &copy; Meubel Jepara</p>
            </div>
            
        </div>
    </footer>

    {{-- wa --}}
    <a class="wa_btn" href="https://wa.me/6285876848657?text=hi%20kak%20aku%20berminat%20memesan%20meubel%20furniture%20ini"><i class="fa-brands fa-whatsapp "></i></a>
</body>
<script src="home.js"></script>
</html>