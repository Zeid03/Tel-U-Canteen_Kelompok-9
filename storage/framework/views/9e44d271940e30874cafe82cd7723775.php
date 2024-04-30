<div style="display: flex; justify-content:center; align-items:center; flex-direction:column; gap:1.5em">
  <div <?php echo e($attributes->merge(['style' => 'background: url("./asset/' . $color . '.png") no-repeat center; height: 384px; width: 384px; justify-content:center; display:flex; align-items:center;'])); ?> style="width: 24em; height: auto" alt="">
    <img <?php echo e($attributes->merge(['src' => $image])); ?> alt="">
  </div>
  <h3><?php echo e($title); ?></h3>
  <a href="/detail">
  <div style="display: flex; gap: 1em; align-items:center; color:#F05A32">
    <p >Pesan</p>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
    </svg>
  </div>
  </a>
</div><?php /**PATH E:\Modul Pelajaran\Semester 6\ABP\Tubes\resto\resources\views\components\favorites.blade.php ENDPATH**/ ?>