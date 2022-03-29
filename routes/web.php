<?php

use App\Models\dokter;
use App\Models\Pasien;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RegisterController;

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
    return view('home',[
        'title' => 'home'
    ]);
});
Route::get('/form', function () {
    return view('form',[
        'title' => 'form',
        'pasiens' => Pasien::All(),
        'dokter' => dokter::All()
    ]);
})->middleware('auth');
Route::post('/proses', [FormController::class, 'proses']);


Route::get('/riwayat', [RiwayatController::class, 'index'])->middleware('auth');

Route::get('/pasien/{pasien:nama}', function(Pasien $pasien){
    return view('riwayat',[
        'title' => 'User Posts',
        'posts' => $pasien->riwayat,
        

    ]);
});
Route::get('/dokter/{dokter:nama}', function(dokter $dokter){
    return view('riwayat',[
        'title' => 'User Posts',
        'posts' => $dokter->riwayat,
        

    ]);
});



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
