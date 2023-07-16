@extends('frontend.layout.app')
@section('content')
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Come On In</span>
                        <span class="section-heading-lower">We're Open</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Senin
                            <span class="ms-auto">Open</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Selasa
                            <span class="ms-auto">8:00 AM to 9:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Rabu
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Kamis
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Jumat
                            <span class="ms-auto">7:00 AM to 8:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sabtu
                            <span class="ms-auto">7:00 AM to 9:00 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Minggu
                            <span class="ms-auto">9:00 AM to 7:00 PM</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>1 Perusahaan China</strong>
                            <br />
                            China
                        </em>
                    </p>
                    <p class="mb-0">
                        <small><em>Call Anytime</em></small>
                        <br />
                        (+62) 812-9726-2031
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('public/frontend/assets/img/4.jpg') }}" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Calcium, Zinc</span>
                            <span class="section-heading-lower">About Our Masker Spirulina Terbaik Dunia</span>
                        </h2>
                        <p>Masih ragu dengan produk kami? Tenang, produk kami terbuat dari bahan alami dan sudah lolos uji klinis, halal, sudah mendapat sertifikasi BPOM, dan bisa bayar ditempat (COD).</p>
                        <p class="mb-0">
                            Kita glow-up glowing bareng kuy!
                            <em>lust</em>
                            Yang mau wajahnya mulus, bisa merapat sekarang juga! Ucapkan selamat tinggal kepada jerawat kamu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
