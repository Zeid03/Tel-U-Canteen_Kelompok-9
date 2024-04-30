<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resto - <?php echo $__env->yieldContent('title'); ?></title> <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">  </head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poller+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
    #logo{
      color:white;
    font-family: "Poppins", sans-serif;
    font-weight: 800;
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
.lool {
  padding: 10px 20px;
  border-radius: 10px;
  border: none;
  outline: none;
  background: #FFEEEB;
  width: 40vw;
  margin-bottom: 2em;
}
  </style>
<body>
  <div style="width:100vw; height:100vh; display:flex;">
    <div style=" flex:1;background: url('./asset/bro.png') no-repeat bottom center, #ededed">

    </div>
    <div style="box-sizing:border-box; flex:1;background: white; display:flex; flex-direction:column; justify-content:space-between; padding:5em; align-items:center">
      <div style="display: flex; flex-direction:column; align-items:center;">
        <h2 style="text-align: center"><span style="color:#B02929">Selamat Datang</span> <br>
          Kembali!</h2>
          <p>Silahkan isi data di bawah ini untuk melanjutkan ke pesanan</p>
          <form id="loginForm" action="<?php echo e(route('login')); ?>" method="POST" class="mt-5">
            <?php echo csrf_field(); ?>
            <h5>Nama</h5>
            <input class="lool" name="name" placeholder="Masukkan nama Anda" type="text">
            <h5>Email</h5>
            <input class="lool" name="email" placeholder="Masukkan email Anda" type="email">
            <h5>Nomor Meja</h5>
            <input class="lool" name="nomor_meja" placeholder="Masukkan nomor meja Anda" type="text">
            
        </form>
      </div>


      <a href="#" style="width: 100%;" onclick="submitLoginForm()">
        <div style="border-radius: 100px !important; width: 100%; padding: 10px 40px" class="buttonRed outletActive">
            Masuk
        </div>
    </a>

    </div>
  </div>
</body>
<script>
  function submitLoginForm() {
      document.getElementById('loginForm').submit();
  }
</script>

<script src="<?php echo e(asset('js/app.js')); ?>"></script> </body>
</html>
<?php /**PATH E:\Modul Pelajaran\Semester 6\ABP\Tubes\resto\resources\views/login.blade.php ENDPATH**/ ?>