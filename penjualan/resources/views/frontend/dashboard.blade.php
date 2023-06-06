@extends('frontend.layout.app')
@section('content')
<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{ asset('frontend/assets/img/intro.jpg') }}" alt="..." />
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">Masker Spirulina</span>
                    <span class="section-heading-lower">Penggemuk Badan</span>
                    <span class="section-heading-upper">Peninggi Badan</span>
                    <span class="section-heading-lower">Pelangsing Badan</span>
                </h2>
                <p class="mb-3">Promo Spesial Jumat Berkah 2 botol Masker Spirulina Tiens dapatkan voucher pulsa Rp10.000 + gratis kuas, hanya untuk 10 orang pertama!</p>
                <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Visit Us Today!</a></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Promise</span>
                        <span class="section-heading-lower">To You</span>
                    </h2>
                    <p class="mb-0">Masker spirulina tiens asli ini 100% terbuat dari bahan-bahan alami yang kaya akan kandungan antioksidan dan nutrisi yang sangat tinggi. Bahkan, setiap kapsul spirulina tiens ini memiliki kandungan nutrisi yang setara dengan ½ kg buah dan sayur, lho!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
