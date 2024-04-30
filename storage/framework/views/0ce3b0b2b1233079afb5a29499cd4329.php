
<div class="rounded" style="background: white;">
  <div class="mt-5 mb-5" style=" height:170px; background: url('<?php echo e($image); ?>') no-repeat center; background-size: auto 169.31px; display:flex; justify-content:end;">
    <div class="px-3 py-2" style="background: #B02929; height:fit-content; color:white; font-weight:bold; border-radius: 1em 0 0 1em">
      <?php echo e($gate); ?>

    </div>
  </div>
  <div class="px-3" style="display: flex; flex-direction:column; gap:0.5em;">
    <h5 style="color: #29B066"><?php echo e($title); ?></h5>
    <p style="width: 244px"><?php echo e($desc); ?></p>
    <hr>
  </div>
  <div class="px-3 pb-5 d-flex" style="justify-content: space-between">
    <div>
      <h5>Harga</h5>
      <h5 style="color: #29B066"><?php echo e($harga); ?></h5>
    </div>
    <a href="/detail">
    <div class="buttonRed outletActive">
      Lihat
    </div>
    </a>
  </div>
</div><?php /**PATH E:\Modul Pelajaran\Semester 6\ABP\Tubes\resto\resources\views/components/outlet-items.blade.php ENDPATH**/ ?>