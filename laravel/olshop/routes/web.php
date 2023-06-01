<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\FormInputController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::get('/', [InputController::class, 'index']);

Route::post('output', [InputController::class, 'output']);

Route::get('/form', [FormInputController::class, 'index']);
Route::post('/form', [FormInputController::class, 'form']);

// ini route tampilan admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});

// Route untuk tampilan frontend
Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});
