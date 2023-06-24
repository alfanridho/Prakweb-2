<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/detail/{id}', [WelcomeController::class, 'show']);

Route::get('/welcomee', function () {
    return view('welcomee');
});

Route::get('/salam', function () {
    return "halo gan";
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Muhammad Alfan Ridho",
        "umur" => 19,
        "email" => "alfanridho@gmail.com"
    ]);
});

Route::get('/nf', function () {
    return view('nf');
});

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan');
});

Route::get('/input', [InputController::class, 'index']);

Route::post('output', [InputController::class, 'output']);

Route::get('/form', [FormInputController::class, 'index']);
Route::post('/form', [FormInputController::class, 'form']);

// ini route tampilan admin
Route::group(['middleware' => 'auth', 'peran:admin-manager'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/kategori_produk', [KategoriProdukController::class, 'index']);
        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/logout', [DashboardController::class, 'logout']);
    });
});

// Route untuk tampilan frontend
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});

Route::get('/frontend', function () {
    return view('frontend');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
