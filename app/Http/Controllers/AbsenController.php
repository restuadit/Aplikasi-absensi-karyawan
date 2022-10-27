<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AbsenMasuk;
use App\Models\AbsenPulang;

class AbsenController extends Controller
{
    // public function __constract(){
    //     $this->AbsenMasuk = new AbsenMasuk();
    // }
    public function tampilan($id, Request $req){
        $row = AbsenMasuk::where([
            ['tanggal',date('Y-m-d')],
            ['id_karyawan',$id]
        ])->count();
            
        if ($row>0) {
            $data = [
                'ada' => true
            ];
        }else {
            $data = [
                'ada' => false
            ];
        }
        $row2 = AbsenPulang::where([
            ['tanggal',date('Y-m-d')],
            ['id_karyawan',$id]
        ])->count();
            
        if ($row2>0) {
            $data2 = [
                'ada2' => true
            ];
        }else {
            $data2 = [
                'ada2' => false
            ];
        }
        $data3['absenmasuk'] = AbsenMasuk::where('id_karyawan','=',$id)->orderBy('absen_masuks.created_at','desc')->get();
        $data3['absenpulang'] = AbsenPulang::where('id_karyawan','=',$id)->orderBy('absen_pulangs.created_at','desc')->get();
        $b = $req->bulan;
        if ($b=='01') {
           $data['bulan'] = 'Januari';
        }elseif ($b=='02') {
            $data['bulan'] = 'Februari';
        }elseif ($b=='03') {
            $data['bulan'] = 'Maret';
        }elseif ($b=='04') {
            $data['bulan'] = 'April';
        }elseif ($b=='05') {
            $data['bulan'] = 'Mei';
        }elseif ($b=='06') {
            $data['bulan'] = 'Juni';
        }elseif ($b=='07') {
            $data['bulan'] = 'Juli';
        }elseif ($b=='08') {
            $data['bulan'] = 'Agustus';
        }elseif ($b=='09') {
            $data['bulan'] = 'September';
        }elseif ($b=='10') {
            $data['bulan'] = 'Oktober';
        }elseif ($b=='11') {
            $data['bulan'] = 'November';
        }else{
            $data['bulan'] = 'Desember';
        }
        $bulan = '%'.'-'.$req->bulan.'-'.'%';
        $data3['hadir'] = AbsenPulang::where([
            ['id_karyawan',$id],
            ['keterangan', 'hadir'],
            ['tanggal','like', $bulan]
        ])->count(); 
        $data3['sakit'] = AbsenPulang::where([
            ['id_karyawan',$id],
            ['keterangan', 'sakit'],
            ['tanggal','like', $bulan]
        ])->count();
        $data3['izin'] = AbsenPulang::where([
            ['id_karyawan',$id],
            ['keterangan', 'izin'],
            ['tanggal','like', $bulan]
        ])->count();
        $data3['alfa'] = AbsenPulang::where([
            ['id_karyawan',$id],
            ['keterangan', 'alfa'],
            ['tanggal','like', $bulan]
        ])->count();
        
        
        return view('absenuser',$data2,$data)->with($data3);
    }
    public function masuk($id, Request $req){
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $jam = date('G:i:s');
        AbsenMasuk::create([
            'id_karyawan' => $id,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'keterangan' => 'hadir'
        ]);
        return back();
    }
    public function pulang($id, Request $req){
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $jam = date('G:i:s');
        AbsenPulang::create([
            'id_karyawan' => $id,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'keterangan' => 'hadir'
        ]);
        return back();
    }
    public function absenkaryawan(Request $req){
       $data['user'] = User::Where('level','user')->get();
       $data['absen'] = AbsenMasuk::join('users', 'absen_masuks.id_karyawan', '=', 'users.id')->orderBy('absen_masuks.created_at','desc')->get();
       $data['absen2'] = AbsenPulang::orderBy('created_at','desc')->get(); //AbsenPulang::all();
            $id = $req->id;
            $b = $req->bulan;
            if ($b=='01') {
               $data['bulan'] = 'Januari';
            }elseif ($b=='02') {
                $data['bulan'] = 'Februari';
            }elseif ($b=='03') {
                $data['bulan'] = 'Maret';
            }elseif ($b=='04') {
                $data['bulan'] = 'April';
            }elseif ($b=='05') {
                $data['bulan'] = 'Mei';
            }elseif ($b=='06') {
                $data['bulan'] = 'Juni';
            }elseif ($b=='07') {
                $data['bulan'] = 'Juli';
            }elseif ($b=='08') {
                $data['bulan'] = 'Agustus';
            }elseif ($b=='09') {
                $data['bulan'] = 'September';
            }elseif ($b=='10') {
                $data['bulan'] = 'Oktober';
            }elseif ($b=='11') {
                $data['bulan'] = 'November';
            }else{
                $data['bulan'] = 'Desember';
            }
            $bulan = '%'.'-'.$req->bulan.'-'.'%';
            $data['nama'] = User::where('id',$id)->get();
            $data['hadir'] = AbsenPulang::where([
                ['id_karyawan',$id],
                ['keterangan', 'hadir'],
                ['tanggal','like', $bulan]
            ])->count();
            $data['sakit'] = AbsenPulang::where([
                ['id_karyawan',$id],
                ['keterangan', 'sakit'],
                ['tanggal','like', $bulan]
            ])->count(); 
            $data['izin'] = AbsenPulang::where([
                ['id_karyawan',$id],
                ['keterangan', 'izin'],
                ['tanggal','like', $bulan]
            ])->count(); 
            $data['alfa'] = AbsenPulang::where([
                ['id_karyawan',$id],
                ['keterangan', 'alfa'],
                ['tanggal','like', $bulan]
            ])->count();
       
        $data['laporanmasuk'] = AbsenMasuk::join('users', 'absen_masuks.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
         $data['laporanpulang'] = AbsenPulang::join('users', 'absen_pulangs.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
              
                
            
       return view('absenkaryawan')->with($data);  
    }
    public function tidakhadir(Request $req){
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $jam = date('G:i:s');
        AbsenMasuk::create([
            'id_karyawan' => $req->id,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'keterangan' => $req->ket
        ]);
        AbsenPulang::create([
            'id_karyawan' => $req->id,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'keterangan' => $req->ket
        ]);
        return back();  
    }
    public function cekuser(Request $req, $id){
        $data['hadir'] = AbsenPulang::where([
            ['id_karyawan',$id],
            ['keterangan','hadir']
        ])->count();
        return view('absenuser')->with($data);
    }
}