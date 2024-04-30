@extends('layout') 

@section('title', 'Home')

@section('content')
<main class="px-5 mt-5 pt-5">  
  <div style="justify-content: between; display:flex; align-items:center;">
    <div style="flex: 1; display:flex; flex-direction:column; gap:2em" class="p-5">
      <div style="display: flex; flex-direction:column; gap: 3px; justify-content:flex-start; align-items:flex-start">
        <h1 style="font: bolder; color: #F05A32">Tel-UCanteen</h1>
        <h1 style="font: bolder">Telkom University</h1>
      </div>
      <h5><span style="color: #F05A32">Pesan</span> dan <span style="color: #F05A32"> Bayar </span> Makanan dengan Mudah</h5>
      <a href="/menu">
      <div class="py-3 px-4 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; background:#B02929; width:fit-content;">
        <p style="font-size: 24px">Cari menu</p>
        <div style="height: 2.5em; width: 0.3em; border-radius: 24px; background: #222229;">
        </div>
        <svg style="width: 32px; height: 32px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
      </div>
      </a>

    </div>
    <img style="margin-right: 3em"src="./asset/logo.png" alt="">
  </div>
  <div class="p-5">
    <p>
      <span style="font-weight: bold">Tel-UCanteen</span> merupakan aplikasi Kantin Telkom University. TC terdiri dari sekitar 27 tenant atau outlet di dalamnya. Dengan adanya Tel-UCanteen, diharapkan <span style="font-weight: bold">kantin halal & thoyyib di Telkom University</span> dapat terealisasi dengan baik.
    </p>
  </div>

  <div style="display: flex; justify-content:space-around;">
    {{--  --}}
    <div style="display: flex; gap: 1em; align-items:center">
      <div style="padding: 2em;" class="rounded-circle shadow">
        <svg style="width: 3em; height: auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
          <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
          <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
        </svg>
      </div>
      <div style="width: 196px;">
        <h5>Pesan Online</h5>
        <p style="font-size: small">Lihat menu & pesan makanan secara online</p>
      </div>
    </div>

      <div style="display: flex; gap: 1em; align-items:center">
        <div style="padding: 2em;" class="rounded-circle shadow">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
          </svg>
        </div>
        <div style="width: 196px;">
          <h5>Bayar Mudah</h5>
          <p style="font-size: small">Bayar pesanan dengan mudah</p>
        </div>
      </div>

      <div style="display: flex; gap: 1em; align-items:center">
        <div style="padding: 2em;" class="rounded-circle shadow">
          {{-- <svg style="width: 3em; height: auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
            <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
          </svg> --}}
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.09091 25.4545C1.51515 25.4545 1.04545 25.2497 0.681818 24.84C0.318182 24.4315 0.181818 23.9697 0.272727 23.4545C0.848485 20.4545 2.45455 18.2194 5.09091 16.7491C7.72727 15.28 10.6061 14.5455 13.7273 14.5455C16.8485 14.5455 19.7273 15.28 22.3636 16.7491C25 18.2194 26.6061 20.4545 27.1818 23.4545C27.2727 23.9697 27.1364 24.4315 26.7727 24.84C26.4091 25.2497 25.9394 25.4545 25.3636 25.4545H2.09091ZM31 40V36.3636H33.5455L36.0909 10.9091H18.7273L18.5455 9.31818C18.4848 8.77273 18.6291 8.29576 18.9782 7.88727C19.3261 7.47758 19.7727 7.27273 20.3182 7.27273H27.3636V1.81818C27.3636 1.30303 27.5376 0.870909 27.8855 0.521818C28.2345 0.173939 28.6667 0 29.1818 0C29.697 0 30.1291 0.173939 30.4782 0.521818C30.8261 0.870909 31 1.30303 31 1.81818V7.27273H38.0909C38.6364 7.27273 39.0909 7.4697 39.4545 7.86364C39.8182 8.25758 39.9697 8.72727 39.9091 9.27273L37.0909 37.3636C37 38.0909 36.6745 38.7121 36.1145 39.2273C35.5533 39.7424 34.8788 40 34.0909 40H31ZM31 36.3636H33.5455H31ZM22.4091 21.8182C21.5303 20.6061 20.2958 19.697 18.7055 19.0909C17.1139 18.4848 15.4242 18.1818 13.6364 18.1818C11.8485 18.1818 10.1594 18.4848 8.56909 19.0909C6.97758 19.697 5.74242 20.6061 4.86364 21.8182H22.4091ZM1.81818 32.7273C1.30303 32.7273 0.871515 32.5527 0.523636 32.2036C0.174545 31.8558 0 31.4242 0 30.9091C0 30.3939 0.174545 29.9624 0.523636 29.6145C0.871515 29.2655 1.30303 29.0909 1.81818 29.0909H25.4545C25.9697 29.0909 26.4018 29.2655 26.7509 29.6145C27.0988 29.9624 27.2727 30.3939 27.2727 30.9091C27.2727 31.4242 27.0988 31.8558 26.7509 32.2036C26.4018 32.5527 25.9697 32.7273 25.4545 32.7273H1.81818ZM1.81818 40C1.30303 40 0.871515 39.8255 0.523636 39.4764C0.174545 39.1285 0 38.697 0 38.1818C0 37.6667 0.174545 37.2352 0.523636 36.8873C0.871515 36.5382 1.30303 36.3636 1.81818 36.3636H25.4545C25.9697 36.3636 26.4018 36.5382 26.7509 36.8873C27.0988 37.2352 27.2727 37.6667 27.2727 38.1818C27.2727 38.697 27.0988 39.1285 26.7509 39.4764C26.4018 39.8255 25.9697 40 25.4545 40H1.81818Z" fill="#232229"/>
            </svg>
            
        </div>
        <div style="width: 196px;">
          <h5>Kualitas Terbaik</h5>
          <p style="font-size: small">Nikmati makanan dan minuman kualitas terbaik</p>
        </div>
      </div>
      {{--  --}}
    </div>

    <div style="display: flex; justify-content: center; flex-direction:column; gap: 1em" class="p-5 mt-5">
      <div style="display: flex; justify-content:center; flex-direction:column; align-items:center">
        <h1 class="text-align:center">
          Kategori <span style="color: #F05A32">Menu Terbaik</span>
        </h1>
        <h1>
          Tel-UCanteen
        </h1>
      </div>
      <div style="display:flex; justify-content:space-around;">
        {{--  --}}
        <x-favorites color="yellow" image="./asset/soto-sate.png" title="Soto Sate"/>
        <x-favorites color="green" image="./asset/foodholder.png" title="Tahu Telor"/>
        <x-favorites color="yellow" image="./asset/nasi-campur.png" title="Nasi Campur" width="325px"/>
        {{--  --}}
      </div>
    </div>

  </main>
  <div style="background: url('./asset/bg.png') no-repeat center;   background-size: 100% 244px; height: 224px; display:flex; flex-direction:column; justify-content:center; align-items:center; color: white;">
    <h4>Nikmati <span style="color: #222229">60+ variasi makanan</span> dari</h4>
    <h4><span style="color: #FFCF54">27 outlet Tel-UCanteen</span></h4>
    <a href="/outlet">
    <div class="py-3 px-4 mt-3 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; background:#222229; width:fit-content; color:white;">
      <p>Lihat Outlet</p>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
      </svg>
    </div>
    </a>
  </div>

  <div style="display: flex;  align-items:center; gap: 3em" class=" p-5 mx-5">
    <div class="p-3" style="display:flex; justify-content:space-between; flex-direction:column; border-radius: 16px;background: url('./asset/discount0.png') no-repeat bottom right, #FFCF54; flex:1; height: 55vh">
      <div>
        <h2>Beli 2<br>
          Gratis 1 Lauk</h2>
          <p>(Tahu / Tempe / Timun)</p>
      </div>
      <p>Geprek Sam Cepot</p>
    </div>
    <div style="display: flex; height: 50vh; gap: 3em; flex:1; flex-direction:column">
      <div class="p-3" style="display:flex; justify-content:space-between; flex-direction:column; border-radius: 16px;background: url('./asset/discount3.png') no-repeat bottom center, #612C20; flex:1;">
        <div>
        </div>
        <p style="color: white">Depot Pak No</p>

      </div>
      <div class="p-3" style="display:flex; justify-content:space-between; flex-direction:column; border-radius: 16px; color:white; background: url('./asset/discount2.png') no-repeat bottom left, #FB6A41; flex:1;">
        <div>
          <h2>PaHe Spesial</h2>
            <p>2 Ricebowl Nasi Kebuli</p>
            <h5>Hanya 18k setiap Jumat</h5>
        </div>
        <p>Ogawa Japanese Rice Bowl</p>
      </div>
    </div>
  </div>

  <footer class="px-5" >
    <div class="py-2 px-5 mx-5" style="background: #222229; border-radius: 2em 2em 0 0; display:flex; align-items:center; justify-content:space-between">
      
      {{-- <div class="py-2 px-3 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; background:#B02929; width:fit-content; color:white;">
        <p>Placeholder</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
        </svg>
      </div> --}}
      <p id="logo">TC</p>
      <div class="p-3" style="color: white; display:flex; gap:2em;">
        <p>© 2024 <span style="color: #FFCF54">Kelompok 9</span> | All Rights Reserved</p>
      </div>

      <div class="py-2 px-3 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; width:fit-content; color:white;">
        <div style=" display:flex; justify-content:center; align-items:center;width:32px; height:32px; background:white;" class="rounded-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" fill="#222"/>
          </svg>
        </div>
        <div style=" display:flex; justify-content:center; align-items:center;width:32px; height:32px; background:white;" class="rounded-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"fill="#222"/>
          </svg>
        </div>
        <div style=" display:flex; justify-content:center; align-items:center;width:32px; height:32px; background:white;" class="rounded-circle">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"fill="#222"/>
          </svg>
        </div>
      </div>
    </div>
  </footer>
@endsection
