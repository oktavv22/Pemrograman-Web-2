@extends('frontend.layout.app')
@section('content')
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">paket promo lebih hemat</span>
                        <span class="section-heading-lower">Suplemen Kesehatan&Kecantikan</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="public/frontend/assets/img/3.jpg" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Kamu stress karena wajah kusam, berminyak, dan penuh dengan jerawat atau komedo? Udah mencoba produk ini itu tapi hasilnya nol besar, bahkan tambah parah karena tidak ada yang cocok?</p></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex me-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Masker Spirulina</span>
                        <span class="section-heading-lower">Masker halus/jerawat</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('public/frontend/assets/img/2.jpg') }}" alt="..." />
            <div class="product-item-description d-flex ms-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Taraaa.. sekarang sudah hadir produk kecantikan masker spirulina tiens asli 100% original yang akan menjadi solusi dari masalah-masalah kulit wajahmu!</p></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Masker terbaik di dunia</span>
                        <span class="section-heading-lower">paket spesial hari jumat</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('public/frontend/assets/img/4.jpg') }}" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Mari glow up bareng!</p></div>
            </div>
        </div>
    </div>
</section>
@endsection