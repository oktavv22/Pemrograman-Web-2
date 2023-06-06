@extends('frontend.layout.app')
@section('content')
<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex ms-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">Blended to Perfection</span>
                        <span class="section-heading-lower">Suplemen Kesehatan $ Kecantikan</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="assets/img/products-01.jpg" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Kamu stress karena wajah kusam, berminyak, dan penuh dengan jerawat atau komedo? Udah mencoba produk ini itu tapi hasilnya nol besar, bahkan tambah parah karena tidak ada yang cocok? Taraaa.. sekarang sudah hadir produk kecantikan masker spirulina tiens asli 100% original yang akan menjadi solusi dari masalah-masalah kulit wajahmu!</p></div>
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
                        <span class="section-heading-upper">Susu Peninggi</span>
                        <span class="section-heading-lower">Masker halus/jerawat/komedo</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('frontend/assets/img/products-02.jpg') }}" alt="..." />
            <div class="product-item-description d-flex ms-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p></div>
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
                        <span class="section-heading-upper">From Around the World</span>
                        <span class="section-heading-lower">Bulk Speciality Blends</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{ asset('frontend/assets/img/.jpg') }}" alt="..." />
            <div class="product-item-description d-flex me-auto">
                <div class="bg-faded p-5 rounded"><p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p></div>
            </div>
        </div>
    </div>
</section>
@endsection
