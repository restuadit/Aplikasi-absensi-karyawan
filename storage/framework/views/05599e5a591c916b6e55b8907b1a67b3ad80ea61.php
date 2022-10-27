


<?php $__env->startSection('konten'); ?>
    <div class="mb-5 ms-5 mt-5 rounded pt-5 " style="background-image:url('img/bg3.jpg');  height:400px; width:600px;">
      <h3 class="text-dark ms-4 mt-4 fs-2" style=" font-family:Arial, Helvetica, sans-serif; font-style:oblique;"><b>Selamat Datang.......</b></h3>
      <p style="font-family:Arial, Helvetica, sans-serif;" class="fs-6 ms-5 me-3 text-dark" style=""><b>Di aplikasi absensi untuk karyawan. Seperti namanya, aplikasi ini dibuat untuk mempermudah karyawan untuk melakukan absen kehadiran sehari-hari. Silakan klik tombol di kiri atas untuk memilih opsi menu.</b></p>
    </div>
    <img src="img/hiasan.png" srcset="" style="position: absolute; height:250px; width:250px; margin-left:800px; margin-top:-370px;">
    <img src="img/hiasan2.png" srcset="" style="position: absolute; height:250px; width:300px; margin-left:110px; margin-top:110px;">
    <?php if(auth()->user()->level == 'admin'): ?>
      <div class="rounded mb-5 pt-3 ps-3 pe-3" style="background-color: rgb(211, 234, 255); width:600px; height:550px; margin-left:560px;">
        <h5 class="text-dark ms-auto me-auto w-50 mt-4 fs-4 ps-3" style=" font-family:Arial, Helvetica, sans-serif;"><b>FITUR FITUR ADMIN</b></h5>
        
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-5 mt-4 mb-2 ms-4 me-3 text-dark" style="">1. Pengelola Data Karyawan</p>
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-6 ms-5 me-3 text-dark" style="">Admin dapat mengola data karyawan yaitu dengan menambah data karyawan, mengedit data karyawan, dan menghapus. Aktivitas ini dapat dilakukan di halaman DATA KARYAWAN</p>
        
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-5 mt-4 mb-2 ms-4 me-3 text-dark" style="">2. Melihat Absensi</p>
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-6 ms-5 me-3 text-dark" style="">Admin juga dapat melihat seluruh absensi yang dilakukan oleh karyawan, dan juga admin bisa mengabsen apabila ada karyawan yang tidak hadir. Aktivitas ini dapat dilakukan di halaman ABSENAN KARYAWAN</p>
        
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-5 mt-4 mb-2 ms-4 me-3 text-dark" style="">3. Merekap Absensi</p>
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-6 ms-5 me-3 text-dark" style="">Admin juga dapat merekap absensi sesuai, dengan cara memilih karyawan dan juga bulan yang akan di rekap. lalu akan muncul absensi yang tadi dipilih lalu admin bisa mendownload absenan itu ke PDF</p>
      </div> 
    <?php else: ?>
      <div class="rounded mb-5 pt-3 ps-3 pe-3" style="background-color: rgb(211, 234, 255); width:600px; height:450px; margin-left:560px;">
        <h5 class="text-dark ms-auto me-auto w-50 mt-4 fs-4 ps-3" style=" font-family:Arial, Helvetica, sans-serif;"><b>FITUR FITUR USER</b></h5>
        
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-5 mt-4 mb-2 ms-4 me-3 text-dark" style="">1. Melihat Profil</p>
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-6 ms-5 me-3 text-dark" style="">User dapat melihat biodata atau profil nya sesuai dengan data yang telah dimasukan oleh admin. profil dapat dilihat di halaman PROFIL.</p>
        
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-5 mt-4 mb-2 ms-4 me-3 text-dark" style="">2. Absensi</p>
        <p style="font-family:Arial, Helvetica, sans-serif; font-style:italic;" class="fs-6 ms-5 me-3 text-dark" style="">Nahh.. disini Karyawan dapat Melakukan Absensi. Karyawan dapat "klik" tombol ABSEN MASUK ketika karyawan sudah sampai di lokasi kerja. Lalu "klik" tombol ABSEN PULANG saat karyawan hendak meninggalkan lokasi kerja. Aktivitas ini dapat dilakukan di halaman ABSEN HARIAN.</p>
      </div> 
    <?php endif; ?>
    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/home.blade.php ENDPATH**/ ?>