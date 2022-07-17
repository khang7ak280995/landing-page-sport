<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'cms',
    'as' => 'cms.',
//    'middleware' => ''
], function () {
    Route::get('', [\App\Http\Controllers\Cms\HomeController::class, 'index']);

    Route::group([
        'prefix' => \App\Helpers\Constant::SLIDE_HOME,
        'as' => \App\Helpers\Constant::SLIDE_HOME . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\SlideHomeController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\SlideHomeController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\SlideHomeController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\SlideHomeController::class, 'changeShow'])->name('change-show');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::INSURANCE_PACKAGE,
        'as' => \App\Helpers\Constant::INSURANCE_PACKAGE . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\InsurancePackageController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO,
        'as' => \App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\ListGolferWinHIOController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });

    Route::group([
        'prefix' => \App\Helpers\Constant::FAQ,
        'as' => \App\Helpers\Constant::FAQ . '.'
    ], function () {
        Route::get('', [\App\Http\Controllers\Cms\FAQController::class, 'index'])->name('index');
        Route::get('getDataTable', [\App\Http\Controllers\Cms\FAQController::class, 'getDataTable'])->name('getDataTable');
        Route::get('create-edit/{id?}', [\App\Http\Controllers\Cms\FAQController::class, 'createOrEdit'])->name('create-edit');
        Route::post('store', [\App\Http\Controllers\Cms\FAQController::class, 'store'])->name('store');
        Route::post('update/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'update'])->name('update');
        Route::get('delete/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'delete'])->name('delete');
        Route::get('change-show/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'changeShow'])->name('change-show');
        Route::get('change-show-home-page/{id}', [\App\Http\Controllers\Cms\FAQController::class, 'changeShowHomePage'])->name('change-show-home-page');
    });
});
