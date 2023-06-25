@extends('layouts.app')
@section('content')
    <h3 style="text-align: center">Hallo {{ Auth::user()->name }}</h3>
    <h2 style="text-align: center">Selamat Datang di Dashboard Frontend</h2>
@endsection