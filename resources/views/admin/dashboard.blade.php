@extends('admin.layout.app')
<!-- orangtua/parent dari setiap halaman -->

<!-- extends itu perintah agar kita dapat menggunakan 
semua code yang ada di dalam file yang di extends -->

<!-- halaman dashboard adalah anak dari si parent/orangtua -->

@section('content')
<h2 style="text-align: center">Hallo {{Auth::user()->name}}</h2>
<h1 style="text-align: center">Ini adalah halaman dashboard</h1>
@endsection