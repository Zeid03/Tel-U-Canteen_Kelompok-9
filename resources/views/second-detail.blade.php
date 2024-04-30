@extends('detail') 

@section('title', 'Menu')

@section('deets')

<div style="width:100%; display:flex; flex-direction:column; align-items:center" class="p-5">

  <h2 style="text-align: center">
    Pindai QR Code berikut melalui akun Gopay anda untuk melanjutkan pembayaran
  </h2>

  <a href="#" onclick="openLoading()">
    <img style="width: 30vw; height:auto" src="./asset/qr.png" alt="">
  </a>

  <p style="color: #29B066">Sistem akan menampilkan status pembayaran apabila pembayaran telah berhasil dilakukan</p>
</div>

@endsection