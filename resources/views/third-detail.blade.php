@extends('detail') 

@section('title', 'Menu')

@section('deets')

<div style="width:100%; display:flex; flex-direction:column; align-items:center" class="p-5">

  <h2 style="text-align: center">
    Pembayaran Berhasil!
  </h2>
  <p style="text-align: center">
    Pembayaran melalui Gopay telah berhasil dan pesanan anda telah diterima
  </p>

  {{-- <a href="#" onclick="openLoading()"> --}}
    <img class="mt-5" style="width: 30vw; height:auto" src="./asset/amico.png" alt="">
  {{-- </a> --}}


  <div class="p-5 d-flex gap-3">
    <a href="/">
      <div style="background: white !important; border: 2px solid #B02929; color:#B02929 !Important;border-radius: 100px !important; padding: 10px 40px" class="buttonRed outletActive">
        Kembali ke Beranda
      </div>
    </a>

    <a href="/pesanan">
      <div style="border-radius: 100px !important; padding: 10px 40px" class="buttonRed outletActive">
        Lacak Pesanan
      </div>
    </a>
    
  </div>
</div>

@endsection