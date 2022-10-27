<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls"); 

?>

               Laporan Absensi
   
     Nama :  <?php echo e($id); ?>

     Bulan : <?php echo e($bulan); ?>

   <?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/excel.blade.php ENDPATH**/ ?>