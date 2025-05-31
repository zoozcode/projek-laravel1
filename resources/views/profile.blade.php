@extends('layout.contoh')
@section('tempel')

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

    .dibagi{
        display: flex;
        flex-direction: row;
    }

    .dibagi .bagi1 img{
        width: 8000px;
        margin: 30px;
    }

    .dibagi .bagi2 p{
        margin: 50px;
    }

    @media (max-width: 768px){
        .dibagi{
            display: flex;
            flex-direction: column;
            margin: 10px
        }
        .dibagi .bagi1 img{
        margin: 0px;
        margin-bottom: 20px;
    }

    .dibagi .bagi2 p{
        margin: 0px;
    }
    }
</style>
<div class="atas">
        <h2>PROFILE</h2>
    </div>

    <div class="dibagi">
        <div class="bagi1">
            <img src="ukir.jpg" alt="">
        </div>
        <div class="bagi2">
            <p><b>UD. Meubel Jepara,</b> produsen maupun eksportir produk-produk indoor mebel jati minimalis atau furniture jati minimalis  berkualitas serta bernilai seni dari jepara, dengan material utama kayu jati premium class / kayu mahoni. Proses produksi dikerjakan sepenuhnya oleh pengrajin – pengrajin profesional yg mempunyai ketrampilan, kehandalan serta totalitas yang tinggi dalam menghasilkan suatu produk, sehingga menghasilkan kualitas produk mebel / furniture kayu jati maupun kayu mahoni yg setara dengan kualitas export. Kami menawarkan produk mebel jati jepara berkualitas mulai dari mebel jati ukir, mebel jati minimalis, dll. Dengan semakin meningkatnya permintaan pasar akan produk mebel jati pada pasar lokal. Kami sebagai salah satu perusahaan mebel di jepara mengambil inisiatif untuk memperluas jaringan target pasar kami pada domain domestik guna memberikan kepuasan serta kepercayaan kepada para konsumen akan terpenuhinya produk-produk mebel jepara / furniture jepara berkualitas.</p>
            {{-- <p>Kami memberikan jaminan kualitas produk mebel jepara yang ada di Katalog UD. Jati Jepara Mebel juga melayani segala macam pesanan mebel jati untuk perumahan, perkantoran, Apartement, dan hotel. Menyediakan berbagai jenis produk indoor mebel mulai dari set meja makan jati minimalis atau ukir, set kursi tamu minimalis atau ukir, set sofa jati, set tempat tidur jati minimalis atau ukir, Lemari pakaian jati minimalis atau ukir , Lemari hias  jati minimalis atau ukir, bufet jati minimalis atau ukir,  gebyok pengantin kayu jati , bufet tv jati minimalis atau ukir, meja rias jati minimalis.</p> --}}
        </div>
    </div>
@endsection