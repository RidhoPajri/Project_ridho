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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $nama = "Ridho Pajriawan Juniansyah";
    $jk = "Laki-Laki";
    $alamat = "Kp.Situtarate Wanieun";
    $pendidikan = "SMK";
    $pekerjaan = "Baso Ikan";
    return view('biodata' , compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

Route::get('/home', function () {
    return view('biodata2');
});

Route::get('/contact', function () {
    return view('biodata3');
});

//parameter
Route::get('/about2/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama ,$jk,$alamat,$pendidikan,$pekerjaan) {
    $nama2 = $nama;
    $jk2 = $jk;
    $alamat2 = $alamat;
    $pendidikan2 = $pendidikan;
    $pekerjaan2 = $pekerjaan;
    return view('param', compact('nama2','jk2','alamat2','pendidikan2','pekerjaan2'));
});