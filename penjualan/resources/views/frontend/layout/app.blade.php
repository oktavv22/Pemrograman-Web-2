@include('frontend.layout.top')
@include('frontend.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            {{-- Ini buat isi content halaman --}}
            @yield('content')
            {{-- Panggil nama section halaman --}}
        </div>
    </main>
</div>
</div>
@include('frontend.layout.bottom')
