<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikController;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/pesan', function () {
    return view('pesan');
});
Route::get('/kritik', function () {
    return view('kritik');
});
Route::get('/misi', function () {
    return view('misi');
});

//kritik
Route::get('/kritik', [KritikController::class, 'index'])->name('kritik.index');
Route::post('/kritik', [KritikController::class, 'store']);
Route::get('/kritik/{id}/edit', [KritikController::class, 'edit'])->name('kritik.edit');
Route::put('/kritik/{id}', [KritikController::class, 'update']);
Route::delete('/kritik/{id}', [KritikController::class, 'destroy']);