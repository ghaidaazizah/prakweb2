@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h3 style="text-align: center"> Selamat {{ Auth::user()->name }} Anda berhasil melakukan registrasi</h3>
           <h5 style="text-align: center">Silahkan logout dan login kembali untuk masuk ke dashboard admin</h5>
        </div>
    </div>
</div>
@endsection
