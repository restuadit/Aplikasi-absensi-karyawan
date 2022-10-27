<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function tampilkaryawan(){
        $data['karyawan'] = User::all();
        return view('tampilkaryawan')->with($data);
    }
    public function carikaryawan(Request $req){
        $cari ='%' .$req->cari. '%';
        $data['karyawan'] = User::where('name', 'like', $cari)->get();
        return view('tampilkaryawancari')->with($data);

    }
    public function tambahkaryawan(){
        return view('tambahkaryawan');
    }
    public function prosestambahkaryawan(Request $req){
        User::Create([
            'name' => $req->nama,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'jk' => $req->jk,
            'no_telp'=> $req->no_telp,
            'alamat' => $req->alamat,
            'image' => $req->file('image')->store('image'),
            'level' => 'user'
        ]);
        return Redirect('/karyawan');
    }
    public function editkaryawan($id){
        $row = User::find($id);
        $data = [
          'id' => $row->id,
          'name' => $row->name,
          'email' => $row->email,
          'password' => $row->password,
          'no_telp'=> $row->no_telp,
          'jk' => $row->jk,
          'alamat' => $row->alamat,
          'image' => $row->image  
        ];
        return view('editkaryawan')->with($data);
    }
    public function proseseditkaryawan($id, Request $req){
        if ($req->image OR $req->password) {
            if ($req->password AND $req->image) {
                User::where('id', $id)->update([
                    'name' => $req->nama,
                    'email' => $req->email,
                    'password' => bcrypt($req->password),
                    'jk' => $req->jk,
                    'no_telp'=> $req->no_telp,
                    'alamat' => $req->alamat,
                    'image' => $req->file('image')->store('image')
                ]);
            }elseif ($req->image) {
                User::where('id', $id)->update([
                    'name' => $req->nama,
                    'email' => $req->email,
                    'jk' => $req->jk,
                    'no_telp'=> $req->no_telp,
                    'alamat' => $req->alamat,
                    'image' => $req->file('image')->store('image')
                ]);
            }else{
                User::where('id', $id)->update([
                    'name' => $req->nama,
                    'email' => $req->email,
                    'password' => bcrypt($req->password),
                    'jk' => $req->jk,
                    'no_telp'=> $req->no_telp,
                    'alamat' => $req->alamat
                ]);
            }
            
        }else {
            User::where('id', $id)->update([
                'name' => $req->nama,
                'email' => $req->email,
                'jk' => $req->jk,
                'no_telp'=> $req->no_telp,
                'alamat' => $req->alamat,
            ]);
        }
        return Redirect('/karyawan');
    }
    public function hapuskaryawan($id, Request $req){
        User::where('id', $id)->delete();
        return Redirect('/karyawan');
    }
    public function profil($id){
        $row = User::find($id);
        $data2 = [
            'id' => $row->id,
            'name' => $row->name,
            'email' => $row->email,
            'password' => $row->password,
            'no_telp'=> $row->no_telp,
            'jk' => $row->jk,
            'alamat' => $row->alamat,
            'image' => $row->image
        ];
        return view('profil')->with($data2);
    }
   
}