<link rel="stylesheet" href="css/bootstrap.css">
<div class="ms-auto me-auto my-3 fs-5" style="width:220px;"><b>Laporan Absensi</b></div>
        <div class=" mt-5 fs-5">
         @foreach($nama as $item)
            Nama : {{ $item['name'] }}
         @endforeach <br>
          Bulan : {{ $bulan }}
        </div>
<div class=" my-4 d-flex" style="width:1000px;" style="display: flex;">
   
   <table class="table-bordered" style="width: 400px;">
     <tr>
       <th>Nama</th>
       <th>Absen Masuk</th>
     </tr>
     @foreach ($laporanmasuk as $item)
       <tr>
         <td>{{ $item['name'] }}</td>
         <td>{{ $item['tanggal'] }}&nbsp;{{ $item['jam'] }}</td>
       </tr>
     @endforeach
   </table>
   <table  style="margin-left: 400px; margin-top:-300px; width:300px;">
     <tr>
       <th>Absen Pulang</th>
       <th>Keterangan</th>
     </tr>
     @foreach ($laporanpulang as $item)
         <tr>
           <td>{{ $item['tanggal'] }}&nbsp;{{ $item['jam'] }}</td>
           <td>{{ $item['keterangan'] }}</td>
         </tr>
     @endforeach
   </table>
 </div>
</div>
