<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsenMasuk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    // public function alldata(){
    //     return DB::table('absen_masuks')
    //     ->leftJoin('users', 'absen_masuks.id_karyawan','=','users.id')
    //     ->get();
    // }
}