@extends('template')

@section('konten')
   <?php
   $no = 1;
   ?>
      <h3 class="text-primary" style="margin-left:470px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Data Karyawan</h3>
      {{-- <button class="btn btn-light border border-primary " style="position: absolute; margin-left:500px;"><a href="/karyawan" class="text-decoration-none">Tampilkan Semua</a></button> --}}
      <form action="/karyawan/cari" class="d-flex w-25 mt-1" style="position: absolute; margin-left:760px;" role="search" method="post">
         @csrf
         <input class="form-control border border-light rounded" type="search" placeholder="Cari Karyawan......" aria-label="Search" name="cari" style="background-color: rgb(234, 234, 255)">
         <button class="btn btn-outline-success border rounded" style="possition:absolute; background-color: rgb(205, 190, 255);" type="submit"><img src="{{ asset('icon/search.svg') }}"></button>
       </form>
      {{-- <button type="button" class="btn btn-primary mt-1 border-primary bg-light" style="position: absolute; margin-left:1045px;"><a href="karyawan/tambah"class="link-light" style="text-decoration: none;"><img src="{{ asset('icon/person-plus.svg') }}" style="height: 25px"></a></button> --}}
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
            @foreach ($karyawan as $data)
               <tr>
                  <th><div class="mt-3 text-primary"><b>{{ $no++ }}</b></div></th>
                  <td>
                     <img src="{{ asset('storage/'. $data['image']) }}" style="height:55px; width:42px;">
                  </td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $data['name'] }}</b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $data['email'] }}</b></div></td>
                  <?php
                  if ($data['jk']=='L') {
                     $jk = 'Laki-laki';
                  }else {
                     $jk = 'Perempuan';
                  }
                  ?>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $jk }}</b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $data['no_telp'] }}</b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $data['alamat'] }}</b></div></td>
                  <td><div class="mt-4" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">{{ $data['level'] }}</b></div></td>
                  <td style="background-color: "><a href="/karyawan/edit/{{ $data['id'] }}"><img src="{{ asset('icon/pencil-square.svg') }}" style="height: 25px;" class="mt-3"></a></td>
                  <td style="background-color: "><a href="/karyawan/hapus/{{ $data['id'] }}"><img src="{{ asset('icon/trash.svg') }}" style="height: 25px;" class="mt-3"></a></td>
               </tr>
            @endforeach
            <tr>
               <td colspan="10"><a href="/karyawan" class="text-decoration-none">Tampilkan Semua</a></td>
            </tr>
         </table>
      </div>
   
@endsection