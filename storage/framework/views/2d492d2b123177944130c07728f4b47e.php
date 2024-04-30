 

<?php $__env->startSection('title', 'Menu'); ?>

<?php $__env->startSection('deets'); ?>

<div style="width:100%; display:flex; flex-direction:column; align-items:center" class="p-5">

  <div style="display:flex; width:100%; justify-content:space-between; align-items:center">
    <div style="display: flex; justify-content:flex-start; align-items:center; flex-direction:row; gap:1.5em">
      <div style="background: url('./asset/yellow.png') no-repeat center; background-size:184px; height: 184px; width: 184px; justify-content:center; display:flex; align-items:center;" alt="">
        <img style="width: 200px; height:auto" src="./asset/foodholder.png" alt="">
      </div>
      <div>
        <h5>Soto Sate</h5>
        <div style="display gap: 1em; align-items:center; color:#F05A32">
          <h2 style="color: #B02929">Rp13.000</h2>
        </div>
      </div>
    </div>
    <div style=""">
      <h5>Jumlah</h5>
      <div style="border-radius:0.3em; background:#EDEDED; padding:1px; display:flex; justify-content:center">
        <div style="color: #B02929; cursor: pointer; user-select: none;" class="p-3">
          -
        </div>
        <div class="px-4 py-3" style="background:white;">
          1
        </div>
        <div style="color: #B02929; cursor: pointer; user-select: none;" class="p-3">
          +
        </div>
      </div>
      <div style="display: flex; gap: 0.4em; justify-content:center; align-items:center">
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.1263 0.378082C8.36846 0.135996 8.69686 0 9.03927 0C9.38168 0 9.71008 0.135996 9.95224 0.378082L11.6219 2.04776C11.864 2.28992 12 2.61832 12 2.96073C12 3.30314 11.864 3.63154 11.6219 3.8737L10.5979 4.89772L7.10228 1.4021L8.1263 0.378082ZM6.18932 2.31507L0.378358 8.12603C0.136171 8.36814 7.31372e-05 8.69654 0 9.03899V10.7087C0 11.0512 0.13605 11.3796 0.37822 11.6218C0.62039 11.8639 0.948844 12 1.29132 12H2.96101C3.30346 11.9999 3.63186 11.8638 3.87397 11.6216L9.68493 5.81068L6.18932 2.31507Z" fill="#B02929"/>
        </svg>        
        <p style="color: #B02929">Tambah catatan</p>
      </div>
    </div>
  </div>

  <div class="m-5" style="box-sizing:border-box; border: 1px solid gray; border-right: 0; border-left: 0; width: 90%; padding:3em; display:flex; gap: 1em; align-items:center; justify-content:space-between">
    
    <p style="font-size: large">Metode Pembayaran <span style="font-size:small; color:#B02929; font-style: italic">Wajib cashless</span></p> 
    <div style="display: flex; align-items:center; gap: 1em;">
      <img src="./asset/gopay.png" alt="">
      <svg class="flip" style="color: #232229 !important" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.256 21.664L0.792 10.912L11.256 0.159998H19.704L9.24 10.912L19.704 21.664H11.256Z" fill="#232229"/>
      </svg>   
    </div>
  </div>

  <div class="m-4" style="width: 90%;display:flex; gap: 1em; align-items:center; justify-content:space-between">
    <p style="font-size: large">Subtotal</p> 
    <p style="font-size: large">13.000</p> 
  </div>

  <div class="m-4" style="width: 90%;display:flex; gap: 1em; align-items:center; justify-content:space-between">
    <h5 style="font-size: large">Biaya Tambahan</h5> 
    <h5 style="font-size: large">0</h5> 
  </div>
  
  <div class="m-4" style="width: 90%;display:flex; gap: 1em; align-items:center; justify-content:space-between">
    <h5 style="font-size: large">Total Pembayaran</h5> 
    <h5 style="font-size: large">13.000</h5> 
  </div>


  <a href="/second-detail" style=" width: 100%; ">
    <div style="border-radius: 100px !important; width: 100%; padding: 10px 40px" class="buttonRed outletActive">
      Bayar Sekarang
    </div>
  </a>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Modul Pelajaran\Semester 6\ABP\Tubes\resto\resources\views/first-detail.blade.php ENDPATH**/ ?>