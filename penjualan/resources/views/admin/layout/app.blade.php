@include('admin.layout.top')
{{-- include utk memanggil --}}
@include('admin.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px 4">
            {{-- isi buat isi content halaman --}}
            @yield ('content')
            {{-- panggil nama section halaman --}}
        </div>
    </main>
</div>
</div>
@include('admin.layout.bottom')