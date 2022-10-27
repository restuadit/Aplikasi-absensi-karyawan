<?php

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-excel.xls"); 

?>
{{-- {{-- {{-- <div class="mt-2 border m-5" style="height:500px;"> --}}
               Laporan Absensi
   {{-- <div class="ms-5 mt-5 fs-5"> --}}
     Nama :  {{ $id }}
     Bulan : {{ $bulan }}
   {{-- </div>
   <div class="ms-auto me-auto border my-4 d-flex" style="width:1000px;">
     <table class="table-bordered border w-50 text-center">
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
     <table class="table-bordered border w-50 text-center">
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
 </div> --}}