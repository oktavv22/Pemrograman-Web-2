<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\Tugas8Controller;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
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
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});
   
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard',[FrontendController::class, 'index']);
    Route::get('/about',[FrontendController::class, 'about']);
    Route::get('/produk',[FrontendController::class, 'produk']);
    Route::get('/store',[FrontendController::class, 'store']);
});