<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'cms',
    'as' => 'cms.',
//    'middleware' => ''
], function () {
    Route::get('', [\App\Http\Controllers\Cms\HomeController::class, 'index']);

    Route::group([
        'prefix' => 'slide-home',
        'as' => 'slide-home.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\SlideHomeController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\SlideHomeController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\SlideHomeController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'delete'])->name('delete');
    });
});
