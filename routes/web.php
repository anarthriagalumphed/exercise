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

Route::get('/test', function () {
    return view('test');
});


Route::post('/test', function (Illuminate\Http\Request $request) {
    // Mengambil data dari form input
    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');

    // Simpan data ke database atau lakukan operasi lainnya
    // ...

    // Tampilkan pesan sukses dan kembalikan ke halaman form
    return redirect('/test')->with('success', 'Data berhasil disimpan.');
});
