@extends('template')

@section('konten')
   <h3 class="text-primary" style="margin-left:480px; margin-top: 20px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Edit Karyawan</h3>
   
   <form class="row g-3 px-5 text-primary" method="POST" action="/karyawan/edit/prosesedit/{{ $id }}" enctype="multipart/form-data">
      @csrf
      <div class="col-12">
         <label for="inputAddress" class="form-label">Nama</label>
         <input type="text" class="form-control" id="inputAddress" name="nama" value="{{ $name }}">
       </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ $email }}">
      </div>
      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Ganti Password?">
      </div>
      <?php
      if ($jk=='L') {
         ?>
         <div class="form-check ps-6" style="margin-left: 10px" name="jk">
         <input class="form-check-input" name="jk" type="checkbox" value="L" id="flexCheckDefault" checked>
         <label class="form-check-label" for="flexCheckDefault">
           Laki-laki
         </label>
       </div>
       <div class="form-check mt-1" style="margin-left: 10px" name="jk">
         <input class="form-check-input" name="jk" type="checkbox" value="P" id="flexCheckChecked">
         <label class="form-check-label" for="flexCheckChecked">
           Perempuan
         </label>
       </div>
         <?php
      }else {
         ?>
         <div class="form-check ps-6" style="margin-left: 10px" name="jk">
            <input class="form-check-input" name="jk" type="checkbox" value="L" id="flexCheckDefault" >
            <label class="form-check-label" for="flexCheckDefault">
            Laki-laki
            </label>
         </div>
         <div class="form-check mt-1" style="margin-left: 10px" name="jk">
            <input class="form-check-input" name="jk" type="checkbox" value="P" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
            Perempuan
            </label>
         </div>
         <?php
         
      }
      ?>
      
      <div class="col-12 mt-2">
        <label for="inputAddress" class="form-label">No Telepon</label>
        <input type="number" class="form-control" id="inputAddress" placeholder="" name="no_telp" value="{{ $no_telp }}">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="" name="alamat" value="{{ $alamat }}">
      </div>
      <div class="mt-4 ms-2 p-2 border rounded" style="height:140px; width:110px;">
        <img src="{{ asset('storage/'. $image) }}" style="height:120px; width:90px;">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Ganti Foto?</label>
        <input class="form-control text-primary" type="file" id="image" name="image">
      </div>
      <div class="col-12 mb-3">
        <button type="submit" class="btn btn-primary" style="width: 150px">Simpan</button>
      </div>
    </form>
@endsection