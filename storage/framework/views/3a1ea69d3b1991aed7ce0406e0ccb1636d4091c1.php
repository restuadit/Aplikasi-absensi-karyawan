

<?php $__env->startSection('konten'); ?>
   <h3 class="text-primary" style="margin-left:530px; margin-top: 30px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Profil Saya</h3>
   <div class="mt-4 border  rounded-4 ms-auto me-auto" style="text-align: center; height:400px; width:400px; margin-bottom:80px; background-color:rgb(210, 234, 255);">
      <img src="<?php echo e(asset('storage/'.$image)); ?>" class="mt-3 rounded-4" style="height: 120px; width:90px;">
      <p class="mt-2 fs-3" style="text-transform: uppercase; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; margin-bottom:-10px;"><?php echo e($name); ?></p>
      <?php
      if ($jk=='L') {
         $jk = 'Laki-laki';
      }else {
         $jk = 'Perempuan';
      }
      ?>
      <p class="fs-6 " style=" font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif"><?php echo e($jk); ?></p>
      <p class="fs-5 " style="margin-bottom:-3px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Email &nbsp;: &nbsp; <?php echo e($email); ?></p>
      <p class="fs-5 ms-2" style="margin-bottom:-3px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">No Telp&nbsp;: &nbsp; <?php echo e($no_telp); ?></p>
      <p class="fs-5 " style=" margin-bottom:-3px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Alamat&nbsp;: &nbsp; <?php echo e($alamat); ?></p>
      <p class="fs-5 text-primary" style=" margin-bottom:5px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Karyawan Radar Tasikmalaya</p>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/profil.blade.php ENDPATH**/ ?>