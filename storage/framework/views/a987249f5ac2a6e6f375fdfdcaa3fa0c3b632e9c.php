<link rel="stylesheet" href="css/bootstrap.css">
<div class="ms-auto me-auto my-3 fs-5" style="width:220px;"><b>Laporan Absensi</b></div>
        <div class=" mt-5 fs-5">
         <?php $__currentLoopData = $nama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Nama : <?php echo e($item['name']); ?>

         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <br>
          Bulan : <?php echo e($bulan); ?>

        </div>
<div class=" my-4 d-flex" style="width:1000px;" style="display: flex;">
   
   <table class="table-bordered" style="width: 400px;">
     <tr>
       <th>Nama</th>
       <th>Absen Masuk</th>
     </tr>
     <?php $__currentLoopData = $laporanmasuk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <tr>
         <td><?php echo e($item['name']); ?></td>
         <td><?php echo e($item['tanggal']); ?>&nbsp;<?php echo e($item['jam']); ?></td>
       </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
   <table  style="margin-left: 400px; margin-top:-300px; width:300px;">
     <tr>
       <th>Absen Pulang</th>
       <th>Keterangan</th>
     </tr>
     <?php $__currentLoopData = $laporanpulang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
           <td><?php echo e($item['tanggal']); ?>&nbsp;<?php echo e($item['jam']); ?></td>
           <td><?php echo e($item['keterangan']); ?></td>
         </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </table>
 </div>
</div>
<?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/pdf.blade.php ENDPATH**/ ?>