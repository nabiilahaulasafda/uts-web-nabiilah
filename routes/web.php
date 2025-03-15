<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// Route::get('mahasiswa/{nama}', function ($nama) {
//     echo "Ini Halaman Mahasiswa dengan Nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello World";
// });

// Route::get('/mahasiswa', function () {
//     $kelas = "IS63";
//     $data = ["Khalifah","Herdio","Badri","Raihan","Putri","Hanif"];

//     // return view('mahasiswa.index')->with('mhs',$data)->with('kls',$kelas);
//     return view('mahasiswa.index',compact('kelas','data'));
// });

Route::get('/mahasiswa', function (){
    $nama = "Herdio Saputra";
    $nilai = 80;

    $nilai2 = [85,90,60,90];

    return view('mahasiswa',compact('nama','nilai','nilai2'));
});
