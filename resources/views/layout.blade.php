<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resto - @yield('title')</title> <link rel="stylesheet" href="{{ asset('css/app.css') }}">  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
    .loader {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: #FF3D00;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
    #logo{
      color:white;
    font-family: "Poppins", sans-serif;
    font-weight: 800;
    font-size:xx-large;
    font-style: normal;
    }
    h5, h2,h3,h4,h1 {
      font-family: "Poppins", sans-serif;
      font-weight: 800;
      font-style: normal;
    }
    p{
      /* color: #232229; */
      font-family: "Poppins", sans-serif;
      margin: 0;
    }
    a{
      text-decoration: none;
      color: inherit
    }
    a:hover{
      color: inherit
    }
    .mc{
      min-height:100vh
    }
    .outletButtons {
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
      cursor: pointer;
      font-weight: bold;
      color: #232229;
      width: 200px;
      padding: 1em 2em;;
      border-radius: 1em;
      background: #FFEEEB;
    }
    .outletButtons:hover {
      color: white;
      background: #B02929;
    }
    .outletActive {
      color: white !important;
      background: #B02929 !important;
    }
    .buttonRed {
      height: fit-content;
      display: flex;
      justify-content: center;
      align-items: center;
      user-select: none;
      cursor: pointer;
      font-weight: bold;
      color: #232229;
      /* width: 200px; */
      padding: 1.5em;;
      border-radius: 1em;
      background: #F15D36;
    }
    .flip {
      transform: scaleX(-1);
    }
    .rounded {
      border-radius: 1em !important;
    }
    .buttonRed:hover {
      color: white;
      background: #B02929;
    }
    .searchBar{
      display: flex;
      gap: 2em;
      color: #D4D4D4;
      border: 1px solid #232229;
      padding: 1em;
      border-radius: 1em;
      width: 70vw;
    }
    .searchBar input{
      outline: none;
      border: none;
      flex: 1;
    }
    .searchBar input:focus{
      outline: none;
      border: none;
      flex: 1;
    }
    /*  */
    body{
  background: #fff;
}

h1{
  text-align: center;
  text-transform: uppercase;
}

.container{
  width: 1200px;
  margin: auto;
}

.timeline{
  /* counter-reset: test 20; */
  position: relative;
}

.timeline li{
  list-style: none;
  float: left;
  width: 33.3333%;
  position: relative;
  text-align: center;
  text-transform: uppercase;
}

ul:nth-child(1){
  color: #B02929;
}

.timeline li:before{
  font-weight: bold;
  /* counter-increment: test; */
  content: "";
  width: 50px;
  height: 50px;
  border: 3px solid #B02929;
  border-radius: 50%;
  display: block;
  text-align: center;
  line-height: 50px;
  margin: 0 auto 10px auto;
  background: #fff;
  color: #000;
  transition: all ease-in-out .3s;
  cursor: pointer;
}

.timeline li:after{
  font-weight: bold;
  content: "";
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: grey;
  top: 25px;
  left: -50%;
  z-index: -999;
  transition: all ease-in-out .3s;
}

.timeline li:first-child:after{
  content: none;
}
.timeline li.active-tl{
  color: #555555;
}
.timeline li.active-tl:before{
  background: #B02929;
  color: #F1F1F1;
}

.timeline li.active-tl + li:after{
  background: #B02929;
}
  </style>
<body>
  <header class="px-5" style="z-index: 100;position: fixed; width: 100vw; top:0">
    <div class="py-2 px-5 mx-5" style="background: #222229; border-radius: 0 0 2em 2em; display:flex; align-items:center; justify-content:space-between">
      
      {{-- <div class="py-2 px-3 rounded-pill text-white" style="display:flex; gap: 1em; align-items: center; background:#B02929; width:fit-content; color:white;">
        <p>Placeholder</p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
        </svg>
      </div> --}}
      <p id="logo">TC</p>
      <div class="p-3" style="color: white; display:flex; gap:2em;">
        <a href="/">
          <p>Beranda</p>
        </a>
        <a href="/menu">
          <p>Menu</p>
        </a>
        <a href="/outlet">
          <p>Outlet</p>
        </a>
        <a href="/pesanan">
          <p>Pesanan Saya</p>
        </a>
      </div>

        <a href="/login" style="background-color: rgb(183, 5, 5); color: white; padding: 0.6rem 1rem; border-radius: 20px">
          @auth
                {{ Auth::user()->name }}
            @else
                Register / Login
          @endauth
        </a>
        
    </div>
  </header>

  <div class="mc">
    @yield('content')

  </div>

  <script src="{{ asset('js/app.js') }}"></script> </body>
</html>
