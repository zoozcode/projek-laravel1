@extends('layout.contoh')
@section('tempel')
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
<style>
    .atas{
        margin-top: 20px;
            width: 100%;
            height: 120px;
            background-image: linear-gradient(to right top, #1600ff, #0625ff, #0037ff, #0345ff, #1351ff, #005eff, #006aff, #0075ff, #0082ff, #008fff, #009aff, #1aa5fd);
            border-radius: 20px;
    }
     .atas h2{
        color: white;
        line-height: 120px;
    }

    .isi{
    background: #f6f6f9;
    margin: 20px;
    width: 90%;
   margin-left: 5%;
    }

    .container97 {
      display: flex;
      justify-content: space-between;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
      background-color: white;
      border-radius: 10px;
    }
    .left {
      width: 48%;
    }
    .right {
      width: 48%;
    }
    .title {
      font-size: 28px;
      font-weight: bold;
      color: #1d3557;
      margin-bottom: 15px;
    }
    .description {
      font-size: 16px;
      margin-bottom: 30px;
      color: #333;
    }
    .contact-box {
      background-color: #042f4b;
      color: white;
      border-radius: 20px;
      padding: 25px;
    }
    .contact-item {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    .contact-item img {
      width: 50px;
      margin-right: 20px;
    }
    .phone-number {
      font-size: 24px;
      font-weight: bold;
    }
    .address {
      margin-left: 70px;
      font-size: 16px;
      line-height: 1.4;
    }
    @media (max-width: 768px) {
      .container97 {
        flex-direction: column;
      }
      .left, .right {
        width: 100%;
      }
      .address {
        margin-left: 0;
      }
    }
    .contact-item1 p{
        font-size: 12px;
    }
    .contact-item2 p{
        font-size: 12px;
    }
</style>
     <div class="atas">
        <h2>CONTACT</h2>
    </div>

      
<div class="container97">
    <div class="left">
        <dotlottie-player
  src="https://lottie.host/e5098f47-8d72-4028-b612-11710448e3a1/3Vcv6IBK8c.lottie"
  background="transparent"
  speed="1"
  style="width: 320px; height: 320px"
  loop
  autoplay
></dotlottie-player>
    </div>
    <div class="right">
      <div class="title">UD. MEUBEL JEPARA</div>
      <div class="description">
        Anda dapat menghubungi kami melalui list yang ada di halaman ini, Customer Service dan Kantor Kami Buka 24 jam di seluruh Cabang yang tersebar di 12 kota besar Indonesia.
      </div>
      <div class="contact-box">
        <div class="contact-item1">
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" alt="Telepon">
          <div class="phone-number">081-390-488225</div> --}}
          
         <p style="font-size: 18px"><i class="fa-brands fa-whatsapp fa-2x"></i> : +62 858 7684 8657</p>
        </div>
        <div class="contact-item2">
          {{-- <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" alt="Lokasi">
          <div class="address">
            <strong>Kantor Pusat :</strong><br>
            Jl. Gudangsawo KM 1.5 Mulyoharjo Jepara
          </div> --}}
          <p style="font-size: 18px"><i class="fa-solid fa-location-dot fa-2x"></i> : Jl. Gudangsawo KM 1.5 Mulyoharjo</p>
          
        </div>
      </div>
    </div>
  </div>
    
@endsection