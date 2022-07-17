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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'homePage'])->name('home');
Route::get('/products', function () {
    return view('frontend.pages.product');
});
Route::get('/list-hio', function () {
    return view('frontend.pages.hio.list-hio');
});
Route::get('/detail-hio', function () {
    return view('frontend.pages.hio.detail-hio');
});
Route::get('/promotions', [\App\Http\Controllers\Webpage\PromotionController::class, 'index'])->name('promotions');
Route::get('/detail-promotion/{id}', [\App\Http\Controllers\Webpage\PromotionController::class, 'view'])->name('detail-promotion');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('insurance-package/{slug?}', [\App\Http\Controllers\HomeController::class, 'insurancePackageDetail'])->name('insurance-package.detail');
Route::group([
    'prefix' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO,
    'as' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.'
], function () {
    Route::get('', [\App\Http\Controllers\HomeController::class, 'listGolferWinHIO'])->name('home');
    Route::get('detail/{image}', [\App\Http\Controllers\HomeController::class, 'golferWinHIODetail'])->name('detail');
});
require __DIR__ . '/auth.php';