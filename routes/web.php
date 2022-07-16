<?php

use Illuminate\Support\Facades\Route;

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
    return view('frontend.pages.home');
});
Route::get('/products', function () {
    return view('frontend.pages.product');
});
Route::get('/list-hio', function () {
    return view('frontend.pages.hio.list-hio');
});
Route::get('/detail-hio', function () {
    return view('frontend.pages.hio.detail-hio');
});
Route::get('/promotion', function () {
    return view('frontend.pages.promotion.list-promotion');
});
Route::get('/detail-promotion', function () {
    return view('frontend.pages.promotion.detail-promotion');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
