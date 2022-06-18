<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandiBadutController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MasukController;


use App\Http\Controllers\TestController;

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
//     return view('home');
// });


// memberikan data berupa nama dari route ke view 
Route::get('/', [HomeController::class, 'index']);

                                                    // ['nama' => 'testimoni',
                                                    // 'desc' => '',
                                                    // 'img'  => ''
                                                    // ]

Route::get('/daftar', function () {
    return view('daftar.index');
});

Route::post('/daftar', [DaftarController::class, 'store']);

Route::get('/masuk', function () {
    return view('masuk');
})->middleware('guest');

Route::post('/masuk', [MasukController::class, 'authenticate']);

Route::get('/user/keluar', [Controller::class, 'keluar']);

Route::get('/user/ubah-password', function () {
    return view('ubah-password');
});

Route::post('/user/ubah-password', [Controller::class, 'ubahPassword']);

Route::get('/tentang-kami', function () {
    return view('tentang');
});

Route::get('/objek-wisata', function () {
    return view('objek-wisata');
});

Route::get('/objek-wisata/candi-badut', [CandiBadutController::class, 'index']);

Route::get('/objek-wisata/candi-badut/sejarah', function() {
    return view('sejarah-candi-badut');
});

Route::get('/objek-wisata/candi-badut/stan-foto', function() {
    return view('stan-foto');
});

Route::get('/objek-wisata/candi-badut/augmented-reality', function() {
    return view('AR');
});


// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/objek-wisata/candi-badut/pesan-tiket', function () {
    return view('pesan-tiket');
});

Route::post('/objek-wisata/candi-badut/pesan-tiket', [Controller::class, 'pesanTiket']);



Route::get('/user/tiket', function () {
    return view('data-tiket');
});

Route::post('/test', [TestController::class, 'index']);