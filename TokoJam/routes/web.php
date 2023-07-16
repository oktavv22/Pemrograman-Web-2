<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::prefix('frontend')->group(function () {
    Route::get('/home',[FrontendController::class, 'home']);
    Route::get('/contact',[FrontendController::class, 'contact']);
    Route::get('/about',[FrontendController::class, 'about']);
    Route::get('/produk',[FrontendController::class, 'produk']);
    Route::get('/automatic',[FrontendController::class, 'automatic']);
    Route::get('/chronograph',[FrontendController::class, 'chronograph']);
    Route::get('/digital',[FrontendController::class, 'digital']);
    Route::get('/quartz',[FrontendController::class, 'quartz']);
    Route::get('/smartwatch',[FrontendController::class, 'smartwatch']);
});
