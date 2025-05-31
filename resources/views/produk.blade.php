@extends('layout.contoh')
 @section('tempel')
 <style>
    
    

.product-section {
  background: #fff;
  padding: 10px;
  border-radius: 6px;
}

.section-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.section-header h2 span {
  background: #0040a1;
  color: white;
  padding: 6px 14px;
  font-size: 12px;
  clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
}

.see-all {
  font-size: 12px;
  color: #0055cc;
  text-decoration: none;
}

.product-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 15px;
}

.product-card {
  background: white;
  border-radius: 6px;
  box-shadow: 0 1px 4px rgba(0,0,0,0.1);
  padding: 10px;
  position: relative;
}

.discount-badge {
  position: absolute;
  top: 5px;
  right: 5px;
  background: #ff6000;
  color: white;
  font-size: 11px;
  font-weight: bold;
  padding: 4px 6px;
  border-radius: 2px;
}

.border {
  margin: 8px auto;
  border: 0;
  width: 100px;
  height: 100px;
  background-color: transparent;
}

.border .product-image {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  margin-bottom: 8px;
}

.border .product-image img {
  max-height: 100%;
  max-width: 100%;
  object-fit: contain;
  border: none;
  outline: none;
  box-shadow: none !important;
}

.bonus {
  font-size: 11px;
  color: red;
  font-weight: bold;
  margin-top: 5px;
}

.bonus img {
  width: 30px;
  vertical-align: middle;
}

.labels {
  display: flex;
  justify-content: center;
  gap: 6px;
  margin-bottom: 8px;
}

.free-shipping, .free-service {
  background-color: red;
  color: white;
  font-size: 10px;
  font-weight: bold;
  padding: 3px 6px;
  border-radius: 3px;
}

.free-service {
  background-color: #444;
}

.product-info {
  text-align: center;
}
.product-info:hover {
  color: black
}

.product-info h3 {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.price-old {
  text-decoration: line-through;
  color: #888;
  font-size: 11px;
}

.price-new {
  color: red;
  font-weight: bold;
  font-size: 16px;
}

.installment {
  font-size: 11px;
  color: #555;
}

.installment span {
  color: #0055cc;
  font-weight: bold;
}

/* Tambahan responsive layout */
@media (max-width: 768px) {
 .product-list{
  display: grid;
     grid-template-columns: repeat(2, 1fr);
     overflow-x: hidden;
 } 


}

@media (max-width: 480px) {
  .product-list{
  display: grid;
     grid-template-columns: repeat(2, 1fr);
 } 

}
 </style>
 {{-- <body> --}}

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/produk">
    <div class="input-group mb-3">
<input type="text" class="form-control ms-4" placeholder="search barang" name="search" value="{{ request('search') }}">
  <button class="btn btn-danger" type="submit" >search</button>
</div>
    </form>
  </div>
</div>

    <div class="semua" >
  
    {{-- <div class="d-flex wrap gap-3 ms-3"> --}}
        
       
        <section class="product-section">
    <div class="section-header">
      <h2><span>PRODUCT</span></h2>
      <a href="#" class="see-all">Lihat Semua</a>
    </div>

    <div class="product-list">
      <!-- Product 1 -->
       @foreach ($produk as $pro )
      <div class="product-card">
        <div class="discount-badge">10%</div>
        <div class="border">

          <div class="product-image">
            <img src="/storage/{{ $pro->foto }}" width="100%" height="auto" alt="UNITED VITESSA">
          </div>
        </div>
        <div class="labels">
          <span class="free-shipping">GRATIS ONGKIR</span>
          <span class="free-service">GRATIS SERVIS</span>
        </div>
        <div class="product-info">
          <h3>{{ $pro->kategori }}</h3>
          <h3>{{ $pro->nama }}</h3>
          <p class="price-new">Rp {{ number_format($pro->harga, 0, ',', '.') }}</p>
           <div class="text-center">
                    <a href="https://wa.me/6285876848657?text=hi%20kak%20aku%20berminat%20memesan%20meubel%20furniture%20ini" class="btn btn-success" ><i class="fa-brands fa-whatsapp "></i> whatsapp</a>
                </div>
        </div>
      </div>
        @endforeach
        
      </div>
  </section>
{{-- </body> --}}
        
    
    {{-- </div> --}}
</div>

{{-- @else
<p class="text-center fs-4">no post found</p>
@endif --}}

<div class="paginate ms-4">

  {{ $produk->links() }}
</div>

@endsection

 {{-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/{{ $pro->foto }}" width="100%" height="100px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $pro->nama }}</h5>
                <p class="card-text text-center">Rp. {{ $pro->harga }}</p>
                <div class="text-center">
                    <a href="https://wa.me/6285876848657?text=hi%20kak%20aku%20berminat%20memesan%20meubel%20furniture%20ini" class="btn btn-success" ><i class="fa-brands fa-whatsapp "></i> whatsapp</a>
                </div>
            </div>
        </div> --}}