@extends('layouts.app')
@section('content')
    <h2 style="text-align: center">Hallo {{ Auth::user()->name }}</h2>
    <h3 style="text-align: center">Selamat Datang di Dashboard Frontend</h3>
@endsection