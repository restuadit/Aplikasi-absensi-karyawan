

<?php $__env->startSection('konten'); ?>
   <h3 class="text-primary" style="margin-left:470px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Absen Karyawan</h3>
    <div class="d-flex">
      <div class="my-5 ms-5 border p-3 rounded-3" style="height: 300px; width:250px; background-color:rgb(226, 226, 249);">
        <?php date_default_timezone_set('Asia/Jakarta'); ?>
        <label class="text-primary fs-5" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Yang Tidak Hadir Tanggal &nbsp;:&nbsp;<?php echo e(date('d-m-Y')); ?></label>
         <form action="/absen/tidakhadir" method="POST">
            <?php echo csrf_field(); ?>
              <select name="id" class="border-primary rounded text-primary mt-2" style="height: 35px">
                <option class="text-primary">Pilih Karyawan</option>
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option class="text-primary" value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <div class="form-check mt-4">
                <input class="form-check-input" type="radio"  id="flexRadioDefault1" name="ket" value="sakit">
                <label class="form-check-label" for="flexRadioDefault1" value="sakit">
                  Sakit
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  id="flexRadioDefault2" name="ket" value="izin">
                <label class="form-check-label" for="flexRadioDefault2" value="izin">
                  Izin
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" id="flexRadioDefault2" name="ket" value="alfa">
                <label class="form-check-label" for="flexRadioDefault2" value="alfa">
                  Alfa
                </label>
              </div>
              <button type="submit" class="btn btn-primary mt-3 w-100">Konfirmasi</button>
          </form>
      </div>
      <div class="overflow-auto mt-3 mb-5 ms-5 me-auto d-flex " style="width:770px; height:400px;">
        <div class="">
          <table class="table table-striped mb-5 table-bordered border text-center" style="width: 420px;">
            <tr class="">
              <th class="">Nama</th>
              <th>Masuk</th>
            </tr>
            <?php $__currentLoopData = $absen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class=""><?php echo e($item['name']); ?></td>
                  <td><?php echo e($item['tanggal']); ?>&nbsp;<?php echo e($item['jam']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
        <div class="ms-0">
          <table class="table table-striped mb-5 ms- table-bordered border text-center" style="width: 330px;">
            <tr>
              <th class="border-start-0">Pulang</th>
              <th>Keterangan</th>
            </tr>
            <?php $__currentLoopData = $absen2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td class="border-start-0"><?php echo e($item['tanggal']); ?>&nbsp;<?php echo e($item['jam']); ?></td>
                  <td><?php echo e($item['keterangan']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </table>
        </div>
      </div>
    </div>
    <div class="mt-4 ms-5 mb-5 d-flex border border rounded" style="width: 1100px; height:200px;">
      <div class=" text-dark rounded p-4 border border-end" style="width: 350px; background-color: rgb(226, 218, 255)" >
        <h5>Cek Kehadiran Karyawan</h5>
        <form action="/absen/cek" method="post" style="">
          <?php echo csrf_field(); ?>
          <select name="id" class="border rounded text-dark mt-2" style="height: 35px">
            <option class="text-dark">Pilih Karyawan</option>
            <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option class="text-dark" value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <select name="bulan" class="border rounded text-dark mt-2" style="height: 35px; width:190px;">
            <option class="text-dark">Pilih Bulan</option>
                <option class="text-dark" value="01">Januari</option> 
                <option class="text-dark" value="02">Februari</option> 
                <option class="text-dark" value="03">Maret</option> 
                <option class="text-dark" value="04">April</option> 
                <option class="text-dark" value="05">Mei</option> 
                <option class="text-dark" value="06">Juni</option> 
                <option class="text-dark" value="07">Juli</option> 
                <option class="text-dark" value="08">Agustus</option> 
                <option class="text-dark" value="09">September</option> 
                <option class="text-dark" value="10">Oktober</option> 
                <option class="text-dark" value="11">November</option> 
                <option class="text-dark" value="12">Desember</option> 
          </select>
          <button type="submit" class="btn btn-primary" style="width: 60px;">Cek</button>
        </form>
        <?php if($hadir>0 OR $sakit>0 OR $izin>0 OR $alfa>0): ?>
        <form action="/laporan-pdf" method="post" style="margin-top:100px;">
          <?php echo csrf_field(); ?>
          <select name="id" class="border-warning rounded text-dark mt-2" style="height: 35px">
            <?php $__currentLoopData = $nama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option class="text-dark" value="<?php echo e($item['id']); ?>"><?php echo e($item['name']); ?></option> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </select>
          <select name="bulan" class="border-warning rounded text-dark mt-2" style="height: 35px; width:190px;">
              <?php if($bulan=='Januari'): ?>
                <option class="text-dark" value="01">Januari</option> 
              <?php elseif($bulan=='Februari'): ?>
                <option class="text-dark" value="02">Februari</option> 
              <?php elseif($bulan=='Maret'): ?>
                <option class="text-dark" value="03">Maret</option>
              <?php elseif($bulan=='April'): ?>
                <option class="text-dark" value="04">April</option>
              <?php elseif($bulan=='Mei'): ?>
                <option class="text-dark" value="05">Mei</option>
              <?php elseif($bulan=='Juni'): ?>
                <option class="text-dark" value="06">Juni</option>
              <?php elseif($bulan=='Juli'): ?>
                <option class="text-dark" value="07">Juli</option>
              <?php elseif($bulan=='Agustus'): ?>
                <option class="text-dark" value="08">Agustus</option>
              <?php elseif($bulan=='September'): ?>
                <option class="text-dark" value="09">September</option>
              <?php elseif($bulan=='Oktober'): ?>
                <option class="text-dark" value="10">Oktober</option>
              <?php elseif($bulan=='November'): ?>
                <option class="text-dark" value="11">November</option>
              <?php else: ?>
                <option class="text-dark" value="12">Desember</option>
              <?php endif; ?>
          </select>
          <input class="btn-warning btn" type="submit" value="Export PDF">
        </form>
        <?php endif; ?>
      </div>
      <div class="ms-3 mt-5">
        <?php if($hadir>0 OR $sakit>0 OR $izin>0 OR $alfa>0): ?>
        <table class="table table-striped  mb-5 table-bordered border text-center" style="width: 700px;">
            <tr>
              <th>Nama</th>
              <th>Bulan</th>
              <th>Hadir</th>
              <th>Sakit</th>
              <th>Izin</th>
              <th>Alfa</th>
              <th>Total</th>
            </tr>
            <tr>
              <?php $__currentLoopData = $nama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <td><?php echo e($item['name']); ?></td>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <td><?php echo e($bulan); ?></td>
              <td><?php echo e($hadir); ?>&nbsp;Hari</td>
              <td><?php echo e($sakit); ?>&nbsp;Hari</td>
              <td><?php echo e($izin); ?>&nbsp;Hari</td>
              <td><?php echo e($alfa); ?>&nbsp;Hari</td>
              <?php
              $total = $hadir + $sakit + $izin + $alfa;
              ?>
              <td><b><?php echo e($total); ?>&nbsp;Hari</b></td>
            </tr>
            <tr>
              <td colspan="7"><a href="/absen/karyawan" class="text-decoration-none">Kembali</a></td>
            </tr>
          </table>
        <?php else: ?>
        <table class="table table-striped mb-5 table-bordered border text-center mt-2" style="width: 700px;">
          <tr>
            <th>Nama</th>
            <th>Bulan</th>
            <th>Hadir</th>
            <th>Sakit</th>
            <th>Izin</th>
            <th>Alfa</th>
            <th>Total</th>
          </tr>
          <tr>
            <td colspan="7"><b>Silakan Pilih Karyawan/Karyawan Yang Dipilih Belum Absen </b> </td>
            
          </tr>
          <tr>
            <td colspan="7"></td>
          </tr>
        </table>
        <?php endif; ?>
      </div>
      
    </div>
    <?php if($hadir>0 OR $sakit>0 OR $izin>0 OR $alfa>0): ?>
      <div class="mt-2 border m-5" style="">
        <div class="ms-auto me-auto my-5 fs-3" style="width: 220px"><b>Laporan Absensi</b></div>
        <div class="ms-5 mt-5 fs-5">
          Nama :  <?php echo e($item['name']); ?> <br>
          Bulan : <?php echo e($bulan); ?>

        </div>
        <div class="ms-auto me-auto border my-5 d-flex" style="width:1000px;">
          <table class="table-bordered border w-50 text-center">
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
          <table class="table-bordered border w-50 text-center">
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
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\coba-project\resources\views/absenkaryawan.blade.php ENDPATH**/ ?>