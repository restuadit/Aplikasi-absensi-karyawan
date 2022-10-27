@extends('template')

@section('konten')
   <h3 class="text-primary " style="margin-left:480px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Tambah Karyawan</h3>
   
   <form class="row g-3 px-5 text-primary" method="POST" action="/karyawan/tambah/prosestambah" enctype="multipart/form-data">
      @csrf
      <div class="col-12">
         <label for="inputAddress" class="form-label">Nama</label>
         <input type="text" class="form-control" id="inputAddress" name="nama">
       </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password">
      </div>
      <div class="form-check ps-6" style="margin-left: 10px" name="jk">
         <input class="form-check-input" name="jk" type="checkbox" value="L" id="flexCheckDefault">
         <label class="form-check-label" for="flexCheckDefault">
           Laki-laki
         </label>
       </div>
       <div class="form-check" style="margin-left: 10px; margin-top:5px;" name="jk">
         <input class="form-check-input" name="jk" type="checkbox" value="P" id="flexCheckChecked">
         <label class="form-check-label" for="flexCheckChecked">
           Perempuan
         </label>
       </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">No Telepon</label>
        <input type="number" class="form-control" id="inputAddress" placeholder="" name="no_telp">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="" name="alamat">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Foto Karyawan</label>
        <input class="form-control text-primary" type="file" id="image" name="image">
      </div>
      <div class="col-12 mb-3">
        <button type="submit" class="btn btn-primary" style="width: 150px">Simpan</button>
      </div>
    </form>
@endsection