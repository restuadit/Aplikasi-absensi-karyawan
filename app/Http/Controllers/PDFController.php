<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AbsenMasuk;
use App\Models\AbsenPulang;
use PDF;


class PDFController extends Controller
{
    public function pdf(Request $req){
        $id = $req->id;
        $data['nama'] = User::where('id',$id)->get();
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
        $data['laporanmasuk'] = AbsenMasuk::join('users', 'absen_masuks.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
         $data['laporanpulang'] = AbsenPulang::join('users', 'absen_pulangs.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
        view()->share('data',$data);
        $pdf = PDF::loadview('pdf', $data);
        return $pdf->download('Absensi Karyawan.pdf');
        
    }
        // return 'berhasil';
    
}