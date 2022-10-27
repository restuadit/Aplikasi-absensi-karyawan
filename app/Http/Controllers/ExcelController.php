<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AbsenMasuk;
use App\Models\AbsenPulang;

class ExcelController extends Controller
{
    public function excel(Request $req){
        // $data['id'] = $req->id;
        // $data['id'] = $id;
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
        //  $data['nama'] = User::where('id',$id)->get();
        //  $row = User::find($id);
        //  $data = [
        //     'name' => $row->name
        //  ];
        $data['laporanmasuk'] = AbsenMasuk::join('users', 'absen_masuks.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
         $data['laporanpulang'] = AbsenPulang::join('users', 'absen_pulangs.id_karyawan', '=', 'users.id')->where([
            ['id_karyawan', $id],
            ['tanggal','like', $bulan]
        ])->get();
        return view('excel')->with($data);
    }
}