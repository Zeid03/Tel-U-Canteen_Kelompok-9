@extends('layout') 

@section('title', 'Menu')

@section('content')

<main class="px-5 mt-5 pt-5" style="gap: 2em; display: flex; align-items:center; flex-direction:column">  
  {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myExampleModal">
    Launch Demo Modal
  </button> --}}

  <div id="loadeee" style="display:none; z-index:1000000000; background: rgba(0,0,0,0.3); position: absolute; width:100vw; top:0; left:0; height:100vh;justify-content:center; align-items:center">
    <span class="loader"></span>
  </div>
  
  <div class="modal fade" id="PesanModal" tabindex="-1" aria-labelledby="PesanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" >
      <div class="modal-content" style="border-radius: 25px !important;">
        <div class="modal-header" >
          <h5 class="modal-title" id="PesanModalLabel">Konfirmasi Pesanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
          @yield('deets')
      </div>
    </div>
  </div>
  <script>
    // window.location.href
    if (window.location.href.includes("second") || window.location.href.includes("third")) {
      var myModal = new bootstrap.Modal(document.getElementById('PesanModal'), {})
      // openLoading()
      // var lol = 
      // console.log(lol)

      myModal.toggle()
    }
    function sleepAndRedirect(delay, redirectUrl) {
      setTimeout(() => {
        window.location.href = redirectUrl; 
      }, delay);
    }


    function openLoading() {
      document.getElementById("loadeee").style.display = "flex"
      sleepAndRedirect(3000, '/third-detail'); 
    }
  </script>
  <div style="width:80vw">
    <p>Menu > <span style="color: #B02929 !important;">Detail Makanan</span></p>

    <div style="display:flex; width:80vw; justify-content:space-between; align-items:center">
      <div style="display: flex; justify-content:flex-start; gap:3em; flex-direction:row;">
        <div style="background: url('./asset/yellow.png') no-repeat center; background-size:384px; height: 384px; width: 384px; justify-content:center; display:flex; align-items:center;" alt="">
          <img style="width: 500px; height:auto" src="./asset/soto-sate.png" alt="">
        </div>
        <div>
          <h3 class="mt-5">1x   Soto Sate</h3>
          <div style="display gap: 1em; align-items:center; display:flex; color:#F05A32">
            <h3 style="color: #B02929">Rp13.000</h3>
            <p>/porsi</p>
          </div>
          <h5 class="pt-3">Gate 1  - Soto Mbok Ayu</h5>
          <p class="py-3">
            Masakan khas Indonesia yang terdiri atas kombinasi dua jenis makanan menjadi satu hidangan yang unik di lidah, yaitu kombinasi antara soto dan sate ayam di atasnya dengan racikan bumbu khas Indonesia yang menjadikannya unik untuk dirasakan.
          </p>
          <div data-bs-toggle="modal" data-bs-target="#PesanModal" style="width:fit-content;: 100px !important; padding: 10px 40px" class="buttonRed outletActive">
            Pesan Sekarang
          </div>
        </div>
      </div>
    </div>
  </div>
  
</main>
{{--  --}}
<div style="display: flex; justify-content: center; flex-direction:column; gap: 1em" class="p-5 mt-5">
  <div style="display: flex; justify-content:center; flex-direction:column; ">
    <h1 class="text-align:center">
      Lihat <span style="color: #B02929">Menu</span> Lainnya
    </h1>
  </div>
  <div style="display:flex; justify-content:space-around;">
    {{--  --}}
    <x-favorites color="yellow" image="./asset/zeid.png" title="Nasi Bakar Bang Zeid"/>
    <x-favorites color="green" image="./asset/tahu-telor.png" title="Tahu Telor Mas Dapeng"/>
    <x-favorites color="yellow" image="./asset/NasiCampur.png" title="Nasi Campur Mas Tata"/>
    {{--  --}}
  </div>
</div>

{{--  --}}
<div style="width:100vw; height: 200px; background: url('./asset/lol.png'); background-size: 150% 500px; background-position: top center;">

</div>
<div style="width:100vw; display:flex; justify-content:center; align-items:center; gap:1em; flex-direction:column; background: #B02929; color:white" class="pb-5">
  <h5>Tel-UCanteen</h5>
  <h5 style="color: #FFCF54">Telkom University</h5>
  <div class="d-flex gap-2" style="justify-content: center; align-items:center">
    <svg style="color:#222229" width="24" height="24" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M29.1917 31C25.4889 31 21.8797 30.1745 18.3641 28.5234C14.8473 26.8736 11.7329 24.6921 9.021 21.979C6.30793 19.2671 4.12644 16.1527 2.47656 12.6359C0.825519 9.12031 0 5.51111 0 1.80833C0 1.29167 0.172222 0.861111 0.516667 0.516667C0.861111 0.172222 1.29167 0 1.80833 0H8.78333C9.18519 0 9.54398 0.129166 9.85972 0.3875C10.1755 0.645833 10.362 0.975926 10.4194 1.37778L11.5389 7.40556C11.5963 7.80741 11.5894 8.17309 11.5182 8.50261C11.4459 8.83328 11.2806 9.12778 11.0222 9.38611L6.88889 13.6056C8.09444 15.6722 9.60139 17.6097 11.4097 19.4181C13.2181 21.2264 15.213 22.7907 17.3944 24.1111L21.4417 20.0639C21.7 19.8056 22.0376 19.6115 22.4543 19.4818C22.87 19.3532 23.2787 19.3176 23.6806 19.375L29.6222 20.5806C30.0241 20.6667 30.3542 20.8601 30.6125 21.1609C30.8708 21.4629 31 21.8148 31 22.2167V29.1917C31 29.7083 30.8278 30.1389 30.4833 30.4833C30.1389 30.8278 29.7083 31 29.1917 31Z" fill="#232229"/>
    </svg>
      
    <h5 style="color:#222229">081 1310 6262</h5>
    
  </div>

  <div class="py-3 px-4 mt-3 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; background:#222229; width:fit-content; color:white;">
    <p>Hubungi Kami Sekarang</p>
  </div>
</div>
<div style="width:100vw; background: #B02929">

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
</div>


@endsection
