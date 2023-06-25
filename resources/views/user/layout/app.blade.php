@include('user.layout.header')
@include('user.layout.menu')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
<!-- Ini buat naro konten atau main -->
@yield('content')
        </div>
    </main>
</div>
</div>
@include('user.layout.footer')