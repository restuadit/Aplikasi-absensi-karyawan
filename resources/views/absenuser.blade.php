@extends('template')

@section('konten')
   <h3 class="text-primary" style="margin-left:470px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Absensi Saya</h3>
    <div class="d-flex">
      @if ($ada==false)
         <div class="mt-0">
            <form action="/absen/masuk" method="post"></form>
               <table class="table table-striped table-hover my-5 ms-5 table-bordered border-primary text-center" style="width: 360px;">
                  <tr>
                     <th class="text-primary" >Nama</th>
                     <th class="text-primary" style="width: 160px">Absen</th>
                  </tr>
                  <tr>
                     <?php
                     $id = auth()->user()->id;
                     $tanggal = date('Y-m-d');
                     $jam = date('G:i:s');
                     ?>
                     <td class="fs-5 text-primary" style="text-transform: uppercase; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><div class="mt-2">{{ auth()->user()->name }}</div></td>
                     <td><button type="submit" class="btn btn-primary text-light mt-2"><a href="/absen/masuk/{{ auth()->user()->id }}" class="text-light text-decoration-none ">Absen Masuk</a></button></td>
                  </tr>
               </table>
            </form>
         </div>
      @elseif($ada2==false)
         <div class="mt-0">
            <form action="/absen/pulang" method="post"></form>
               <table class="table table-striped table-hover my-5 ms-5 table-bordered border-primary text-center" style="width: 360px;">
                  <tr>
                     <th class="text-primary">Nama</th>
                     <th class="text-primary" style="width: 160px;">Absen</th>
                  </tr>
                  <tr>
                     <?php
                     $id = auth()->user()->id;
                     $tanggal = date('Y-m-d');
                     $jam = date('G:i:s');
                     ?>
                     <td class="fs-5 text-primary" style="text-transform: uppercase; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><div class="mt-2">{{ auth()->user()->name }}</div></td>
                     <td><button type="submit" class="btn btn-primary text-light mt-2"><a href="/absen/pulang/{{ auth()->user()->id }}" class="text-light text-decoration-none">Absen Pulang</a></button></td>
                  </tr>
               </table>
            </form>
         </div>
      @else
         <div class="mt-0">
            <table class="table table-striped table-hover my-5 ms-5 table-bordered border-primary text-center" style="width: 360px; ">
               <tr>
                  <th class="text-primary" style="width: 200px">Nama</th>
                  <th class="text-primary" style="width: 160px">Absen</th>
               </tr>
               <tr>
                  <td class="fs-5 text-primary" style="text-transform: uppercase; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><div class="mt-2">{{ auth()->user()->name }}</div></td>
                  <td><button type="submit" class="btn btn-primary text-light mt-2" style="">Sudah Absen</button></td>
               </tr>
            </table>
         </div>
      @endif
         <div class="overflow-auto ms-auto me-auto d-flex mt-4 mb-5 ms-3 border border rounded p-2" style="width:680px; height:450px; background-color:rgb(248, 247, 255);">
            <div class="mt-0">
               <table class="table table-striped  mb-5  table-bordered border text-center" style="width: 370px;">
                  <tr>
                     <th class="text-primary " style="width: 200px">Nama</th>
                     <th class="text-primary">Absen Masuk</th>
                  </tr>
                  @foreach ($absenmasuk as $item)
                  <tr>
                        <td class="text-primary ">{{ auth()->user()->name }}</td>
                        <td>{{ $item['tanggal'] }}&nbsp;{{ $item['jam'] }}</td>
                  </tr>
                  @endforeach
               </table>
            </div>
            <div class="mt-0">
               <table class="table table-striped  mb-5 table-bordered border text-center" style="width: 270px;">
                  <tr>
                     <th class="text-primary border-start-0">Absen Pulang</th>
                     <th class="text-primary">Keterangan</th>
                  </tr>
                  @if ($ada==true AND $ada2==false)
                     <td colspan="2" class="border-start-0">Belum Absen</td>
                  @endif
                     @foreach ($absenpulang as $item)
                        <tr>
                              <td class="border-start-0">{{ $item['tanggal'] }}&nbsp;{{ $item['jam'] }}</td>
                              <td>{{ $item['keterangan'] }}</td>
                        </tr>
                     @endforeach
               </table>
            </div>
         </div>
   </div>
   <div class="ms-5 border border rounded mb-5 d-flex" style="width:1100px; height:170px;">
      <div class="border border-end rounded p-3" style=" width:300px; background-color:rgb(218, 212, 255);">
         <h5 class="text-primary mt-3" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Cek Kehadiran Saya</h5>
         <form action="/absen/user/cek/{{ auth()->user()->id }}" method="post">
            @csrf
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
            <button type="submit" class="btn btn-primary mt-3" style="width: 60px; margin-bottom:20px;">Cek</button>
         </form>
      </div>
      @if ($hadir>0 OR $sakit>0 OR $izin>0 OR $alfa>0)
      <div class="text-center">
         <table class="table table-striped table-hover ms-5 mt-4 table-bordered border text-center" style="width:700px;">
            <tr>
               <th>Bulan</th>
               <th>Hadir</th>
               <th>Sakit</th>
               <th>Izin</th>
               <th>Alfa</th>
               <th>Total</th>
            </tr>
            <tr>
               <td>{{ $bulan }}</td>
               <td>{{ $hadir }}&nbsp;Hari</td>
               <td>{{ $sakit }}&nbsp;Hari</td>
               <td>{{ $izin }}&nbsp;Hari</td>
               <td>{{ $alfa }}&nbsp;Hari</td>
               <?php
                  $total = $hadir+$sakit+$izin+$alfa;
               ?>
               <td><b>{{ $total }}&nbsp;Hari</b></td>
            </tr>
            <tr>
               <td colspan="6"><a href="/absen/user/{{ auth()->user()->id }}" class="text-decoration-none">Kembali</a></td>
             </tr>
         </table>
      </div>
      @else
      <div class="text-center">
         <table class="table table-striped table-hover ms-5 mt-4 table-bordered border text-center" style="width:700px;">
            <tr>
               <th>Bulan</th>
               <th>Hadir</th>
               <th>Sakit</th>
               <th>Izin</th>
               <th>Alfa</th>
               <th>Total</th>
            </tr>
            <tr>
               <td colspan="6"><b>Pilih Bulan/ Anda Belum Pernah Absen Di Bulan Ini</b></td>
               
            </tr>
            <tr>
               <td colspan="6"></td>
             </tr>
         </table>
      </div>
      @endif
      
   </div>
@endsection