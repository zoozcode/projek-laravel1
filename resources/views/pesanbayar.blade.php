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

    .isi{
    background: #f6f6f9;
    margin: 20px;
    width: 90%;
   margin-left: 5%;
    }

    .isi2{
    background: #f6f6f9;
    margin: 20px;
    width: 90%;
   margin-left: 5%;
    }
    .bank-section {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-bottom: 30px;
        }
        .bank-card {
            flex: 1;
            text-align: center;
            border-bottom: 1px solid #ccc;
            padding-bottom: 20px;
        }
        .bank-card img {
            width: 200px;
            margin: 15px 0;
        }
        .info-row {
            margin: 10px 0;
        }
        .service-center {
            margin-top: 40px;
        }
        .service-center ul {
            list-style: none;
            padding: 0;
        }
        .service-center li {
            margin-bottom: 10px;
        }

        h3{
            text-align: center;
        }
       
</style>
    <div class="atas">
        <h2>CARA PEMESANAN</h2>
    </div>

    <div class="isi">
        <h4>Prosedur / Cara Pemesanan Produk Mebel di meubeljepara.com</h4>
        <p>> Pilih produk mebel yang sudah kami sediakan pada katalog mebel online meubeljepara.com, kami telah menyediakan berbagai jenis katalog yg memudahkan anda dalam memilih kebutuhan mebel sesuai keinginan anda, kemudian tentukan Kategori Produk, Kode Produk (SKU) dan Jumlah Barang yang akan dipesan, Informasikan pesanan anda dengan langsung menghubungi kami melalui Email : infojatijepara@gmail.com atau Call & Whatsapp : 081 229 222 35 / 085 325 933 523  A/N Yoyok Subagiyono.</p>
        <p>> Langkah berikutnya, kami akan menginformasikan prosedur order, total harga dan biaya kirim kepada saudara, jika harga sudah disepakati dan ready stok ada, maka kami minta biaya untuk ditransfer ke salah satu rekening kami.</p>
        <p>> Apabila produk mebel yang dipesan belum ready stok / habis, maka kami mohon kepada saudara untuk mengirimkan DP 50 % dari total harga, Setelah deposit menetap di salah satu account bank kami, kami akan mulai proses produksi barang yang anda pesan sebelumnya dengan segera. sisa 50% pelunasan dibayarkan setelah kami informasikan bahwa pesanan sudah siap untuk dikirim</p>
        <p>> Proses produksi dalam tempo 7 – 15 hari tergantung dari jenis produk yang dipesan.</p>
        <p>> Pembatalan pesanan dapat dilakukan jika proses produksi barang yang dipesan belum dimulai dan DP dikembalikan penuh tanpa potongan.</p>
        <p>> Setiap proses produksi atau finishing kita laporkan kepada pemesan dengan mengirim foto-fotonya Via Whatsapp atau Email.</p>
        <p>> Prosedur Pelunasan dapat juga dilakukan setelah barang berada di perusahaan expedisi / cargo, sehingga pemesan dapat mengecek langsung ke perusahaan expedisi tersebut via phone.</p>
        <p>> Proses pengiriman barang biasanya kami lakukan dengan menggunakan Jasa Expedisi Truck Lokal / Kargo Lokal, hal ini dapat memberikan efisiensi biaya kirim supaya dapat ditekan lebih murah, karena biaya kirim akan menjadi tanggung jawab sepenuhnya pada pihak pembeli.</p>
        <p>> Untuk mengetahui posisi kiriman produk/barang mebel pesanan anda, kami akan menginformasikan Nomor HP Sopir dari pihak perusahaan kargo/ekspedisi yang bersangkutan yang bertanggung jawab membawa barang pesanan saudara sehingga anda dapat mengecek posisi kiriman saudara.</p>
        <p>> Jika barang sudah diterima tetapi dalam keadaan rusak / lecet., maka klaim dapat diterima selama sopir pengantar barang masih dilokasi terima barang, karena akan sepenuhnya menjadi tanggung jawab kargo atau jasa ekspedisi yang bersangkutan. Jika barang dalam keadaan lecet ringan, maka kami akan mengirimkan bahan warna finishing yang sama lewat paket sehingga barang yang lecet dapat langsung dikuas / dicolok dengan warna yang kami kirimkan. Jika ternyata barang yang diterima dalam keadaan rusak berat, maka kami siap mengganti dengan yang baru, setelah barang dikirim kembali ( diretur ).</p>
    </div>

    <div class="atas">
        <h2>CARA PEMBAYARAN</h2>
    </div>

    <div class="isi2">
        <h4>Metode Keamanan Pembayaran / Safety Payment Method Pada JeparaMeubel.com :</h4>
        <p>1. Tranfer Pembayaran antar Rekening Bank :</p><hr>
        <p>> Pembayaran dilakukan dengan cara transfer ke rekening JeparaMeubel.Com yang sudah kami sediakan pada kolom di bawah.</p>
        <p>> Proses transfer dapat dilakukan melalui ATM, Internet Banking, Mobile Banking/ SMS Banking.</p>
        <p>> Proses selanjutnya konfirmasikan transfer pembayaran saudara melalui email/ sms/ telp kepada kami supaya permintaan anda bisa dengan segera kami proses.</p><hr>
        <p>2. Transfer pembayaran melalui setor tunai antar Bank :</p><hr>
        <p>> Pembayaran dilakukan dengan cara malakukan setor tunai secara langsung ke rekening JeparaMebel.Com yang sudah kami sediakan pada kolom di bawah.</p>
        <p>> Proses selanjutnya konfirmasikan transfer pembayaran saudara melalui email/ sms/ telp kepada kami supaya permintaan anda bisa dengan segera kami proses.</p><hr>

        <h3>Valid Account Bank UD. Jepara Meubel :</h3>

    <div class="bank-section">
        <div class="bank-card">
            <h5>Bank BCA Cabang Jepara</h5>
            <img src="bca.jpg" alt="BCA">
            <div class="info-row">No.Rek : 2471661394</div>
            <div class="info-row">A/N Yoyok Subagiyono</div>
        </div>
        <div class="bank-card">
            <h5>Bank BRI Cabang Jepara</h5>
            <img src="bri.jpg" alt="BRI">
            <div class="info-row">No. Rek. : 0022-01-000610-53-8</div>
            <div class="info-row">A/N Yoyok Subagiyono</div>
        </div>
    </div>

    <div class="service-center">
        <h4>Service Center konfirmasi transfer pembayaran dapat dilakukan melalui media berikut :</h4>
        <ul>
            <li>
               
                Whatsapp : 081 229 222 35 / 085 325 933 523 A/N Yoyok Subagiyono
            </li>
            <li>Office : [0291] 4294800</li>
            <li>Email : <a href="mailto:infojatijepara@gmail.com">meubeljepara@gmail.com</a></li>
        </ul>
    </div>
    </div>
@endsection