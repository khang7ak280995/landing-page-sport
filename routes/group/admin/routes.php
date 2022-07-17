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

    Route::group([
        'prefix' => 'promotion',
        'as' => 'promotion.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\PromotionController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\PromotionController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\PromotionController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\PromotionController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\PromotionController::class, 'update'])->name('update');
        Route::POST('delete/{id}', [\App\Http\Controllers\Cms\PromotionController::class, 'delete'])->name('delete');
    });

    Route::group([
        'prefix' => 'customer-register',
        'as' => 'customer-register.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'store'])->name('store');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\CustomerRegisterController::class, 'edit'])->name('edit');
    });

    Route::group([
        'prefix' => 'config-info',
        'as' => 'config-info.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\ConfigController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\ConfigController::class, 'store'])->name('store');
        Route::post('/destroy/{id}', [\App\Http\Controllers\Cms\ConfigController::class, 'destroy'])->name('destroy');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\ConfigController::class, 'edit'])->name('edit');
    });

    Route::group([
        'prefix' => 'become-agent',
        'as' => 'become-agent.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'index'])->name('index');
        Route::post('/store', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'store'])->name('store');
        Route::post('/destroy/{id}', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'destroy'])->name('destroy');
        Route::get('{id}/edit', [\App\Http\Controllers\Cms\BecomeAgentController::class, 'edit'])->name('edit');
    });
});
