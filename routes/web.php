<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login/auth', [App\Http\Controllers\LoginController::class, 'auth']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);
Route::get('/home', function () {
    return view('home');
});


Route::group(['middleware' => ['auth','ceklevel:admin']], function(){
    Route::get('/karyawan', [App\Http\Controllers\UserController::class, 'tampilkaryawan']);
    Route::get('/karyawan/tambah', [App\Http\Controllers\UserController::class, 'tambahkaryawan']);
    Route::post('/karyawan/tambah/prosestambah', [App\Http\Controllers\UserController::class, 'prosestambahkaryawan']);
    Route::get('/karyawan/edit/{id}', [App\Http\Controllers\UserController::class, 'editkaryawan']);
    Route::post('/karyawan/edit/prosesedit/{id}', [App\Http\Controllers\UserController::class, 'proseseditkaryawan']);
    Route::get('/karyawan/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapuskaryawan']);
    Route::post('/karyawan/cari', [App\Http\Controllers\UserController::class, 'carikaryawan']);
    Route::get('/absen/karyawan', [App\Http\Controllers\AbsenController::class, 'absenkaryawan']);
    Route::post('/absen/tidakhadir', [App\Http\Controllers\AbsenController::class, 'tidakhadir']);
    Route::post('/absen/cek', [App\Http\Controllers\AbsenController::class, 'absenkaryawan']);
    Route::post('/laporan-pdf', [App\Http\Controllers\PDFController::class, 'pdf']);
});
Route::group(['middleware' => ['auth','ceklevel:user']], function(){
    Route::get('/profil/{id}', [App\Http\Controllers\UserController::class, 'profil']);
    Route::get('/absen/user/{id}', [App\Http\Controllers\AbsenController::class, 'tampilan']);
    Route::get('/absen/masuk/{id}', [App\Http\Controllers\AbsenController::class, 'masuk']);
    Route::get('/absen/pulang/{id}', [App\Http\Controllers\AbsenController::class, 'pulang']);
    Route::post('/absen/user/cek/{id}', [App\Http\Controllers\AbsenController::class, 'tampilan']);
});