<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\Tugas8Controller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/salam', function(){
    return view('salam', [
        "nama"=>"Rahma Oktaviyanti",
        "umur"=>19
    ]);
});

Route::get('/nilai', function(){
    return view('nilai');
});

Route::get('/form',[FormController::class, 'index']);
Route::POST('/hasil',[FormController::class, 'hasil']);

Route::get('/tugasform',[TugasController::class, 'index']);
Route::post('/tugashasil',[TugasController::class, 'hasil']);

Route::get('/formulir',function(){
    return view('formulir',[
        "nama"=>"Rahma Oktaviyanti",
        "tanggal_pemeriksaan"=>"15 Mei 2023",
        "umur"=>19,
        "jenis_kelamin"=>"perempuan"
    ]);
});

//route admin
Route::group(['middleware' => ['auth', 'peran:admin-manager']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('pesanan/delete/{id}', [PesananController::class,'destroy']);

        Route::get('/kategoriproduk', [KategoriController::class, 'index']);
        Route::get('/kategoriproduk/create', [KategoriController::class, 'create']);
        Route::post('/kategoriproduk/store', [KategoriController::class, 'store']);
        Route::get('/kategoriproduk/edit/{id}', [KategoriController::class, 'edit']);
        Route::post('/kategoriproduk/update/{id}', [KategoriController::class, 'update']);
        Route::get('/kategoriproduk/delete/{id}', [KategoriController::class, 'destroy']);
        });
});
   
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/about',[FrontendController::class, 'about']);
    Route::get('/produk',[FrontendController::class, 'produk']);
    Route::get('/store',[FrontendController::class, 'store']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
