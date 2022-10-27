

<?php $__env->startSection('konten'); ?>
   <?php
   $no = 1;
   ?>
      <h3 class="text-primary" style="margin-left:470px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Data Karyawan</h3>
      
      <form action="/karyawan/cari" class="d-flex w-25 mt-1" style="position: absolute; margin-left:760px;" role="search" method="post">
         <?php echo csrf_field(); ?>
         <input class="form-control border border-light rounded" type="search" placeholder="Cari Karyawan......" aria-label="Search" name="cari" style="background-color: rgb(234, 234, 255)">
         <button class="btn btn-outline-success border rounded" style="possition:absolute; background-color: rgb(205, 190, 255);" type="submit"><img src="<?php echo e(asset('icon/search.svg')); ?>"></button>
       </form>
      
      <div class="overflow-auto ms-auto me-auto my-5" style="width:1050px; height:400px;">
         <table class="table table-striped table-hover ms-auto me-auto table-bordered border-light" style="margin-top: 10px; width:1000px; font-family:Arial, Helvetica, sans-serif; possition:absolute; text-align:center;">
            <tr class="">
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>No</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Foto</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Nama</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Email</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Jenis Kelamin</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>No Telp</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Alamat</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)"><b>Level</b></th>
               <th class="text-light" style="background-color: rgb(204, 189, 255)" colspan="2" style="width: 75px;"><b>Aksi</b></th>
            </tr>
            <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                  <th><div class="mt-3 text-primary"><b><?php echo e($no++); ?></b></div></th>
                  <td>
                     <img src="<?php echo e(asset('storage/'. $data['image'])); ?>" style="height:55px; width:42px;">
                  </td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($data['name']); ?></b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($data['email']); ?></b></div></td>
                  <?php
                  if ($data['jk']=='L') {
                     $jk = 'Laki-laki';
                  }else {
                     $jk = 'Perempuan';
                  }
                  ?>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($jk); ?></b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($data['no_telp']); ?></b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($data['alamat']); ?></b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"><?php echo e($data['level']); ?></b></div></td>
                  <td style="background-color: "><a href="/karyawan/edit/<?php echo e($data['id']); ?>"><img src="<?php echo e(asset('icon/pencil-square.svg')); ?>" style="height: 25px;" class="mt-3"></a></td>
                  <td style="background-color: "><a href="/karyawan/hapus/<?php echo e($data['id']); ?>"><img src="<?php echo e(asset('icon/trash.svg')); ?>" style="height: 25px;" class="mt-3"></a></td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td colspan="10"><a href="/karyawan" class="text-decoration-none">Tampilkan Semua</a></td>
            </tr>
         </table>
      </div>
   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/tampilkaryawancari.blade.php ENDPATH**/ ?>